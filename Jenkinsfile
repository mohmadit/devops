
// Jenkinsfile
pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                sh 'npm install' // تثبيت التبعيات
                sh 'npm run build' // بناء التطبيق
            }
        }
        stage('Test') {
            steps {
                sh 'npm test' // تنفيذ اختبارات الوحدات
            }
        }
        stage('Deploy') {
            steps {
                // تنفيذ عملية النشر، مثلاً إلى خادم أو Docker
            }
        }
    }
}
