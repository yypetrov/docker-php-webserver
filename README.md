# Configuration files to compose Nginx, PHP, MySQL in one container.

## Installing Docker on your system
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
