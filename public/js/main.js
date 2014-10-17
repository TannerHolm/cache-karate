function StudentsController($scope, $http) {

    $http.get('/student').success(function(students) {
        $scope.students = students;
    });

    $scope.addStudent = function() {
        var student = {
            first_name: $scope.studentFirstName,
            last_name: $scope.studentLastName,
            class_id: $scope.studentClass,
            belt_rank: $scope.studentBeltRank,

        };

        $scope.students.push(student);

        $http.post('/student', student);
    };

}

