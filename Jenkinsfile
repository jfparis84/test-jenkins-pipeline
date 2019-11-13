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
            input {
                message "Should we continue?"
                ok "Yes, we should."
            }
            steps {
                echo "Hourray!!!"
            }
        }
    }
}
