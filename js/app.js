function getMessages(){

  const requeteAjax = new XMLHttpRequest();
  requeteAjax.open("GET", "handler.php");
//2020-05-25 17:25:01
// 2 05-25 1 2020
  requeteAjax.onload = function(){
    const resultat = JSON.parse(requeteAjax.responseText);

    const html = resultat.reverse().map(function(message){
        const date = message.creat_at.substring(5);
      return `
        <div class="message">
          <span class="date" style="font-size: 10px;
    font-style: italic;
    color: gray;">${date}</span><br/>

          <span class="author" style="color:darkorange; font-size"15px">${message.author}</span> :
          <span class="content">${message.content}</span>
        </div>
      `
    }).join('');

    const messages = document.querySelector('.messages');

    messages.innerHTML = html;
    messages.scrollTop = messages.scrollHeight;
  }

  requeteAjax.send();
}

function postMessage(event){

  event.preventDefault();

  const author = document.querySelector('#author');
  const content = document.querySelector('#content');

  const data = new FormData();
  data.append('author', author.value);
  data.append('content', content.value);

  const requeteAjax = new XMLHttpRequest();
  requeteAjax.open('POST', 'handler.php?task=write');

  requeteAjax.onload = function(){
    content.value = '';
    content.focus();
    getMessages();
  }

  requeteAjax.send(data);
}

document.querySelector('form').addEventListener('submit', postMessage);

const interval = window.setInterval(getMessages, 3000);

getMessages();