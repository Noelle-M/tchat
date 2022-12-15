# Chat
##Chat PHP JS Ajax
###Pour utiliser ce chat :

git clone : https://github.com/Noelle-M/tchat.git

Créer une BDD dans http://localhost/phpmyadmin 

![2022-12-15_22h41_51](https://user-images.githubusercontent.com/43520762/207976572-49772835-0bc4-4bc5-a780-c7706074fb46.png)

Ici, la table tchat contient 4 champs : `id`, `creat_at`, `author`, `content`

`id` doit être en `Primary Key` et `Auto_increment`

La table user contient 2 champs : `id`, `prenom`

Ici l'`id` est tapé en dur dans le code, évidemment vous devez adapter ce chat à votre utilisation.
![2022-12-15_23h13_07](https://user-images.githubusercontent.com/43520762/207978927-2d245a28-6566-45f0-879e-8aa69d737669.png)

Si vous souhaitez tester immédiatement, saisissez dans votre table `user`, un prénom et un id.
N'oubliez pas de le changer dans le code si vous n'y enregistrez pas un "3" dans votre table...

Dans le dossier `includes/db.php` remplacer les infos de la connexion à la BDD par vos infos
![2022-12-15_23h23_55](https://user-images.githubusercontent.com/43520762/207980539-95c38e64-408a-4e66-ab5d-e361f8b6fee6.png)


Allez à la racine du dossier et lancez un serveur en tapant la ligne de commande : `php -S localhost:8000` depuis votre terminal.
![2022-12-15_23h18_49](https://user-images.githubusercontent.com/43520762/207979363-d670b9b2-788c-4887-a5e5-fe835946ad6d.png)

Et Tadaaaaaam !! 
![2022-12-15_23h00_42](https://user-images.githubusercontent.com/43520762/207977413-0311b3a1-602e-4269-a01d-140e4887476c.png)
