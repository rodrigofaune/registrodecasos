		<?php  


		 include("connection.php");
		        $con=Conectar();

		if ($_POST) {
			        $rutAlumno=$_POST['idAlumno'];
		            $nombreAlumno=$_POST['nombreAlumno'];
		            $antecedentes=$_POST['antecedentes'];
		            $idApoderado=$_POST['idApoderado'];
		            $idCurso=$_POST['idCurso'];

		            
		 $sql1="INSERT INTO alumno (idAlumno, nombreAlumno, antecedentes, Apoderado_IdApoderado, Curso_idCurso) VALUES 
		        ('".$rutAlumno."','".$nombreAlumno."','".$antecedentes."','".$idApoderado."','".$idCurso."')" ;

		 $query1=mysql_query($sql1,$con) or die (mysql_error());
		 


			       mysql_close($con);

		}

		?>