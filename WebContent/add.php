 <?php
// On commence par r�cup�rer les champs
if(isset($_POST['nom']))      $nom=$_POST['nom'];
else      $nom="";

if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
else      $prenom="";

if(isset($_POST['email']))      $email=$_POST['email'];
else      $email="";

if(isset($_POST['age']))      $age=$_POST['age'];
else      $age="";

if(isset($_POST['titre']))      $titre=$_POST['titre'];
else      $titre="";

if(isset($_POST['message']))      $message=$_POST['message'];
else      $message="";

// On v�rifie si les champs sont vides
if(empty($nom) OR empty($prenom) OR empty($email) OR empty($titre) OR empty($message))
    {
    echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>';
    }

// Aucun champ n'est vide, on peut enregistrer dans la table
else     
    {
       // connexion � la base
$db = mysql_connect('mysql-mariadb14-104.zap-hosting.com', 'zap445718-4', 'password')  or die('Erreur de connexion '.mysql_error());
// s�lection de la base  

    mysql_select_db('zap445718-4',$db)  or die('Erreur de selection '.mysql_error());
    
    // on �crit la requ�te sql
    $sql = "INSERT INTO infos_tbl(id, nom, prenom,email, icq, titre, url) VALUES('','$nom','$prenom','$email','$age','$titre','$message')";
    
    // on ins�re les informations du formulaire dans la table
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

    // on affiche le r�sultat pour le visiteur
    echo 'Vos infos on �t� ajout�es.';

    mysql_close();  // on ferme la connexion
    } 
?> 
