# Project One Content Delivery VDE

***

## Project installation walkthrough

The **Virtual Development Environment** (VDE) is using Laradock, a fully integrated environment for testing and debugging your
Laravel based project. Its purpose is to build a Linux virtual machine that reproduces a production server setup. It includes
all dependencies in order to support the Laravel environment.

### Installation

1. If not already installed, install [Docker for Windows](https://docs.docker.com/docker-for-windows/install/)
    1. Remember: Docker and Vagrant/VirtualBox don't go together! By installing Docker, you won't be able to have Vagrant/VirtualBox working anymore.
1. After Docker is installed:
    1. Open Docker Settings
    1. Make sure C drive is shared
1. Start PowerShell as Administrator
1. If not already created, create and enter the `C:\dev` folder
1. Checkout this repo to c:\dev\pocd_vde\ [pocd_vde](https://stash.mgcorp.co/projects/CD/repos/docker-images/) repo
1. Checkout this repo to c:\dev\spearhead\ [spearhead](https://stash.mgcorp.co/projects/CD/repos/spearhead/) repo
1. Get Docker up and running:
    1. Go to `C:\dev\pocd_vde` folder
    1. Run this on PowerShell: `docker-compose up -d nginx redis mysql`
    1. This will take some time, so grab a coffee!
1. Meanwhile, add the following to your Windows Hosts file:
    ```
    #POCD APP
    127.0.0.1 dev-spearhead.mgcorp.co
    ```
1. Start a terminal in your docker container (after it completes startup), in PowerShell run these commands:
    1. `cd c:\dev\spearhead`
    1. `docker exec -ti pocdvde_workspace_1 bash`
    1. `php composer install`
    1. Edit .bashrc `vim ~/.bashrc`
    1. Add: `alias spearcs='/vendor/bin/phpcs -p --standard=PSR2 /app'`
    1. Reload your .bashrc `source ~/.bashrc`

1. Now you can visit:  http://dev-spearhead.mgcorp.co/ to verify that you are up and running.

***

## Useful Docker Commands

Please, visit [this Wiki page](http://wiki.mgcorp.co/display/EPO/Useful+Docker+Commands) for useful Docker commands.

