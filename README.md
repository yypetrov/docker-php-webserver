# Configuration files to compose Nginx, PHP, MySQL in one container.

## STEP 1: Installing Docker on your system
Docker is a platform for developing, shipping, and running applications using container technology. In this guide, we'll walk you through the steps to install Docker on your system.

### Prerequisites
Before you begin, make sure you have the following prerequisites:
A computer running a supported operating system: Linux, macOS, or Windows.
Administrative privileges on the computer to install Docker.

### Installation
To install Docker, follow these steps:

Visit the [Docker](https://docker.com) website and select the appropriate Docker version for your operating system.
Follow the instructions to download and install Docker.

Once the installation is complete, you can verify that Docker is installed correctly 
by running the following command in **a terminal** or command prompt:
```
docker --version
```
If Docker is installed correctly, you should see output similar to the following:
```
Docker version 20.10.7, build f0df350
Congratulations! You have successfully installed Docker on your system.
```

### Running Docker
To start using Docker, you can run the following command in a terminal or command prompt:

```
docker run hello-world
```
This command will download a small Docker image and run it in a container. If the installation was successful, you should see output similar to the following:

```
Hello from Docker!
```
This message shows that your installation appears to be working correctly.

## STEP 2: Download Docker image configuration files
Download Docker image configuration files from this repository.

1. Use a git clone:
```
git clone git@github.com:yypetrov/docker-php-webserver.git
```

2. Or download it manually from the github page of the repository:
Click the URL below:
[Docker PHP Webserver](https://github.com/yypetrov/docker-php-webserver)
On the page click **Code** button, then **Download ZIP**
Unzip files in the folder.

## STEP 3: Prepare, compose and run custom Docker image:

### Open terminal and go to the folder
Open terminal and go to the folder where you put files from this repository.
It should looks something like that:
```
    682 Mar 30 17:51 docker-compose.yml
    367 Mar 27 17:11 nginx.conf
 145388 Mar 30 18:49 online-shop.sql
    872 Mar 27 16:44 PHP.Dockerfile
   4096 Apr  3 19:24 public
     90 Apr  3 10:12 README.md
```

### Compose a custom Docker image
In the terminal execute next command:
> For Mac OS *Docker Desktop* must be executed and run before that.
```
docker compose up
```


