<script>
export default{
	name:'picture',
	data(){
		return{
			user:"/img/profile.jpg",
			descricao:"user"
		}
	}
}
</script>
<template>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img :src="user" :alt="descricao">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span style="color:white">
									Hizrian
									<span class="user-level" style="color: white;">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse" style="color: white;">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse" style="color: white;">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse" style="color: white;">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<a href="/Dashboard">
							<i class="la la-dashboard"></i>
							<p>Inicio</p>
							<span class="badge badge-count">5</span>
							</a>
						</li>

						<li class="nav-item active">
							<a href="/Agendamento">
							<i class="la la-keyboard-o"></i>
							<p>Agendamento</p>
							<span class="badge badge-count">50</span>
							</a>
						</li>

						<li class="nav-item">
							<a href="javascript:void(0);" class="dropdown-toggle" onclick="toggleDropdown('historicoDropdown')">
							<i class="la la-table"></i>
							<p>Historico </p>
							</a>
							<div id="historicoDropdown" class="dropdown-content">
							<a href="/HistoricoOpcao1">Agendamentos</a>
							<a href="/HistoricoOpcao2">Documentos</a>
							</div>
						</li>

						</ul>

				</div>
			</div>
</template>
<style scoped>
.sidebar{
	background: rgb(3, 83, 70);
}

.nav-item p{
	color: white;
}

/* Estilos do menu suspenso */
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Estilos dos links no menu suspenso */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Mudança de cor ao passar o mouse sobre as opções do menu */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Exibição do menu ao passar o mouse sobre o botão */
.dropdown:hover .dropdown-content {
  display: block;
}

</style>