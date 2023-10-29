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
									<span class="user-level" >Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse" >Meu Perfil</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse" >Editar Perfil</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="/Dashboard">
							<i class="la la-tachometer"></i>
							<p>Inicio</p>
							<span class="badge badge-count">5</span>
							</a>
						</li>

						<li class="nav-item active">
							<a href="/Agendamento">
							<i class="la la-calendar-check-o"></i>
							<p>Agendamento</p>
							<span class="badge badge-count">10</span>
							</a>
						</li>
						<li class="nav-item active">
							<a href="/Relatorio">
							<i class="la la-check-square"></i>
							<p>Relatorios</p>
							<span class="badge badge-count">50</span>
							</a>
						</li>
						<li class="nav-item active">
							<a href="/Historico">
							<i class="la la-history"></i>
							<p>Historico </p>
							<span class="badge badge-count">80</span>
							</a>
							</li>
						</ul>
				</div>
			</div>
</template>
<style scoped>
.sidebar{

}

.nav-item p{
	
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