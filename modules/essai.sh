#!/bin/bash

message='Hello world'

echo "$message Hector"

read -p "entrez votre nom:" -t 2 nom

echo $#

if [ $# = 0 ]
then
  echo "Pas d'arguments"
elif [ $# = 1 ]
then
  echo "un unique argument"
else
  echo "Au moins 2 argument"
fi

vide=''
echo $nom
if [ "$nom" != "$vide" ]
then
  echo "$nom est dans de beaux draps"
fi


if [ -e "essai.sh" ]
then
  echo "Le fichier actuel existe"
fi


while [ "$nom" != "Brele" ]
do
  read -p "entrez le mot de passe: " nom
  echo $nom
done
