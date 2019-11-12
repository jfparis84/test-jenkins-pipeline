pipeline {
    agent { dockerfile true }
    stages {
        stage('Build') {
            steps {
                sh 'php --version'
                sh 'composer install'
            }
        }
        stage('Test') {
            steps {
                sh './vendor/bin/phpunit'
            }
        }
        stage('Deploy') {
            steps {
                sh 'echo "je suis la!!!"'
            }
        }
    }
}
