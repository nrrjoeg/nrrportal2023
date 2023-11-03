# nrrportal
NRR Portal Respository
The main branch is the actual main branch of the repository. Use the main branch to create a new copy of the NRR Portal Web app. The main branch is created by default, so we're gonna use that.

To clone the repository, use git clone git@github.com:nrrjoeg/nrrportal.git. This assumes the client system has SSH pairing with the Github repository.

Note that succcessful use of this code requires an SSH tunnel to Blackbird. To create this:

ssh -L 3336:blackbird:3306 blackbird

This will create a tunnel on local port 3336 to MySQL on Blackbird.

This repository is meant to be used as a Website. On Ubuntu, this means it needs to be dropped into /var/www/html. Clone the repository into Documents, which leaves a directory called nrrportal.

Do these commands. First wipe out the existing repository.

rm -rf /var/www/html/nrrportal

Then go to ~/Documents. Type:

sudo cp -r nrrportal /var/www/html

As long as you have the correct file permissions, you have successfully replaced the repository.

