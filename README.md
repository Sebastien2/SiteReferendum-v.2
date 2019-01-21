# SiteReferendum-v.2
Website for online referendums, in PHP/html/JS

Files:
/conversation
/groupe
/leftColumn
/listeRefs
/listes
/ref
/research
/user
/vote
are useless because also present in /modules/

url:
http://http://www.referendumforme.fr/www/index.php?module=listes&action=accueil

Strategy:
there are groups of voters. Everyone can create new groups. Only a member of a group can start a referendum on this group of voters, and vote for such a referendum. The groups have a hierarchy: so that important groups can exist by integrating small groups. Hence we have important referendums. The management of a group (and its membership conditions) are defined by the administrators of the group.

Such structure allow a shared control of which referendums are created, with noone to control the whole. However, there cannot be a huge amount of widely spread referendums, because each person is limited by the groups he's part of. Hence each individual has a limited influence. 

Defaults:
- no way to ensure that each person has a single account (and therefore votes only once for every referendum) ->each account is associated with an exclusive email address
- all the votes are centralized in one database: not good because the admin of the database can do anything he wants

Security:
passwords hashed with salt, but the admin knows everything

Improvements: check the validity of the emails by sending one with a temporary password
