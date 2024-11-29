<style type="text/css">
	/*Création des variable CSS*/
:root{
	--ecriture:#f1f1f1;
	--background:#262626;
}
body{
	background: var(--background);
	font-family: sans-serif;
}
h1, p, h2, h3, h4{

	font-size: 20px;
	color: var(--ecriture);
}
.changeTheme{
	cursor: pointer;
	width: 200px;
	height: 50px;
	background: blue;
	color: var(--ecriture);
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 20px;
	border-radius: 5px;
}
</style>

<li class="nav-item">
	<a class="nav-link changeTheme" style="font-size: 20px">Theme</a>
</li>


<script type="text/javascript">
		const switchThemeBtn=document.querySelector('.changeTheme');
		let toogleTheme=0;

		switchThemeBtn.addEventListener('click', ()=>{
			if (toogleTheme===0) {
				document.documentElement.style.setProperty('--ecriture','#262626');
				document.documentElement.style.setProperty('--background','#f1f1f1');
				toogleTheme++;
			}else{
				document.documentElement.style.setProperty('--ecriture','#f1f1f1');
				document.documentElement.style.setProperty('--background','#262626');
				toogleTheme--;
			}
		});
	</script>