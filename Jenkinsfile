pipeline {
    agent {
        docker { image 'php' }
    }
    stages {
        stage('Test') {
            steps {
                sh 'php --version'
            }
        }
    }
}
