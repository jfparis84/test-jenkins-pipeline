# test-jenkins-pipeline

This project template was develop to test the [Jenkins Blue Ocean](https://jenkins.io/projects/blueocean/) with **Docker**. How the pipeline syntax looks like and how you can interact with Jenkins with the **Jenkinsfile** and the **Dockerfile**. 

## Requirements
Before you start, you need some requirements:

 - [Docker](https://www.docker.com/) 
 - [Jenkins](https://jenkins.io/) with the Blue Ocean plugin.

*You can pull the [jenkinsci/blueocean](https://hub.docker.com/r/jenkinsci/blueocean/) docker image to start Jenkins with the Blue Ocean plugin already installed.*

## Start Jenkins With Docker
You can use this docker run command to start Jenkins.
 
	$ docker run \
	--rm \
	-u root \
	-p 8080:8080 \
	-v jenkins-data:/var/jenkins_home \
	-v /var/run/docker.sock:/var/run/docker.sock \
	-v "$HOME":/home \
	jenkinsci/blueocean

*With this command, Jenkins will have access to the **dockerd** service to interact with it.*

## My First Installation Of Jenkins
If you are not familiar with this, please go to [Jenkins Installation](https://jenkins.io/doc/book/installing/) procedures.

## My First Pipeline
Once Jenkins is launched, navigate to [http://localhost:8080/blue](http://localhost:8080/blue) to enter in the Blue Ocean Project.

- Click on the **New Pipeline** button on the top right.
- Click on the **Git** button.
- In the **repository URL**, paste the https://github.com/jfparis84/test-jenkins-pipeline.git. Leave the username / password blank.
- Click on **Create Pipeline**

## Have Fun :)