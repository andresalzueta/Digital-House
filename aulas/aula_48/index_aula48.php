<!DOCTYPE html>
<!--Aula-20 21-6-2018-->
<!--index.php -->
<!--http://localhost:8080/teste/-->
<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<h1 id="tituloPrincipal">Aula 48 - JavaScript & DOM - Entendendo Document Object Model</h1>
        <p class="paragrafo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum felis. Duis dignissim lacus libero, ac convallis metus aliquet at. Maecenas non risus augue. Proin et pulvinar urna. Mauris sed ipsum neque. Fusce semper quis nisl quis bibendum. Sed lobortis tincidunt ex et vehicula. Suspendisse potenti. Morbi vehicula ut enim ac efficitur. </p>
        <p class="paragrafo">Curabitur tempor ultrices enim sed tincidunt. In sit amet augue pulvinar, ultrices eros et, lobortis urna. Nunc auctor ante eget nisi gravida, quis ullamcorper quam suscipit. Pellentesque vel ligula quis sapien ultricies consequat. In fermentum eros sed lectus rhoncus laoreet quis quis enim. In auctor in dui eget blandit. Morbi egestas mi ut felis dictum vestibulum. Ut vel enim tellus. Aliquam cursus accumsan cursus. Vivamus tempus dolor vitae interdum fringilla. </p>
        <p class="paragrafo">Sed sagittis tellus at suscipit consequat. Donec dignissim gravida sem, sed feugiat turpis euismod sit amet. Phasellus lacinia auctor placerat. Curabitur molestie, erat nec vestibulum hendrerit, libero velit convallis sem, in faucibus ex orci eget dui. Quisque neque tellus, ornare nec dictum nec, tempor sed dolor. Duis vel lorem tortor. Morbi sagittis mauris ligula, quis consectetur enim feugiat ultrices. Proin gravida sed dui eget mattis. Etiam pellentesque orci in ornare vehicula. Cras sodales urna ut massa suscipit pharetra. Nulla facilisi. Nulla tellus felis, sodales nec accumsan vel, placerat sit amet elit. Cras egestas eleifend libero. </p>
        <a href="#">link text</a>

		<h2> DOM - Entendendo Document Object Model </h2>
		<script>
			// código JavaScript
            const tituloPrincipal = document.querySelectorAll("#tituloPrincipal")
            
            document.querySelectorAll("#tituloPrincipal").forEach(
                function(element){
                element.style.color = 'red';
            });

            const paragrafos = document.querySelectorAll(".paragrafo")

            document.querySelectorAll(".paragrafo").forEach(
                function(element){
                element.style.color = 'blue';
            });


            console.log(tituloPrincipal.attributes);
            console.log(paragrafos.attributes);

            
            link.setAttribute("href","http://www.disney.com")

		</script>
		<script src="script_48.js"></script>
	</body>
</html>