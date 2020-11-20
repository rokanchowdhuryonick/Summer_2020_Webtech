<?php if($_SESSION['userType']=='admin'){?>
				<ul>
					<li>
						<a href="add_teacher.php">Add Teacher</a>
					</li>
					<li>
						<a href="teachers_list.php">Teachers List</a>
					</li>
					<li>
						<a href="add_student.php">Add Student</a>
					</li>
					<li>
						<a href="students_list.php">Students List</a>
					</li>
					<li>
						<a href="accounts_onhold.php">Teacher/Student Verification</a>
					</li>
					<li>
						<a href="create_department.php">Create Department</a>
					</li>
					<li>
						<a href="department_list.php">Departments List</a>
					</li>
					<li>
						<a href="add_course.php">Add New Course</a>
					</li>
					<li>
						<a href="course_list.php">All Courses</a>
					</li>
					<li>
						<a href="create_notice.php">Create Notice</a>
					</li>
					<li>
						<a href="notice_list.php">All Notices</a>
					</li>
					<li>
						<a href="create_salary.php">Create Salary</a>
					</li>
					<li>
						<a href="salary_list.php">Salary List</a>
					</li>
					<li>
						<a href="create_student_payment.php">Create Student Payment</a>
					</li>
					<li>
						<a href="student_payment_list.php">Students Payment List</a>
					</li>
				</ul>
			<?php } ?>