<?php


/*

    Les Design Patterns

    Les Design Patterns représentent les meilleures pratiques utilisées par les développeurs de logiciels orienté objet. 
    Ils sont des solutions aux problèmes généraux rencontrés par les développeurs lors de la phase de développement.
    Un Design pattern n'est pas une conception finie qui peut être transformée directement en code. Il s'agit d'une description ou d'un modèle pour résoudre un problème qui peut être utilisé dans de nombreuses situations différentes.

    Il existe 23 designs patterns répartis en 3 catégories :
    - modèle de création
    - modèle de structuration
    - modèles de comportement

    Autres : 
    - MVC

    MVC 

    Le MVC signifie Model-View-Controller 
    C'est un modèle architectural qui sépare une application en trois composants logiques principaux : modèle, vue et le controlleur. 
    Chacun de ces composants est construit pour gérer des aspects de développement spécifiques d'une application. 

    Les modèles 

    Les modèles sont chargé de gérer les données et leur persistance. Un modèle se comporte comme un portail permettant au reste de l'application d'accéder aux données et de les conserver au besoin. Souvent on associera les modèles à une base de données.
    (requetes SQL)

    Les vues 

    Les vues permettent de gérer l'affichage final de nos pages. Elles génèreront le code HTLM qui sera affiché aux utilisateurs à partir des variables récupérées depuis le controller.
    (rendu visuel HTML)

    Le controller

    Le controller est le dernier élément de la structure MVC et c'est aussi l'élément liant. Il va s'occuper de recevoir les données entrées par l'utilisateur et de communiquer les changements aux modèles. Il pourra aussi communiquer avec les modèles pour obtenir des informations qu'il pourra ensuite transférer à la vue.
    (le pilote de l'application || Il réceptionne les données du model (requete SELECT + FECTH) et en fonction de l'action de l'internaute, il va transmettre les données sur un template / vue sur le navigateur)
*/
