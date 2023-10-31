<script>
import sidebar from '../component-front/sidebar.vue'
export default{
	name:'picture',
	data(){
		return{
			user:"/img/profile.jpg",
			descricao:"user",
			
		}
	},
}
</script>
<template>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="/" class="logo" >
					Ready Dashboard
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
					<form class="navbar-left navbar-form nav-search mr-md-3" action="#">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-envelope"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-bell"></i>
								<span class="notification">3</span>
							</a>
							<ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="assets/img/profile2.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img :src="user" :alt="descricao" width="36" class="img-circle"><span >Hizrian</span></a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img :src="user" :alt="descricao" width="36" class="img-circle"></div>
										<div class="u-text">
											<h4 >Hizrian</h4>
											<p class="text-muted">hello@themekita.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-user"></i> Meu Perfil</a>
									
									<a class="dropdown-item" href="/"><i class="fa fa-power-off"></i> Sair</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img :src="user" :alt="descricao">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span >
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
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Agendas</h4>
						<div class="row">

								<div class="card" style="background-color:rgb(242, 243, 248)" >
									<div class="card-header">
										<div class="card-title" style="background: rgb(77, 124, 254)">Minhas agendas</div>
									</div>
									<div class="card-body">
										<div class="card-sub">									
											
										</div>

										<table class="table table-borderless" style="background-color:" >
											<thead>
												<tr style="background: rgb(77, 124, 254)">
													<th scope="col">id</th>
													<th scope="col">nome</th>
													<th scope="col">Hospital</th>
                                                    <th scope="col">Método </th>
													<th scope="col">Inicio</th>
													<th scope="col">periodo</th>
													<th scope="col">Interrupção</th>
													<th scope="col">Status</th>
													
													<th scope="col">Acçoes</th>

												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Mark</td>
													<td>Otto</td>
													<td>@mdo</td>
													<td>12/10/23</td>
													<td>Otto</td>
													<td>12/10/23</td>
													<td>Activo</td>
													<td class="la la-remove" style="color:red;">eliminar</td>
													<td class="la la-edit" style="color:blue">editar</td>
													
												</tr>
												<tr>
													<td>2</td>
													<td>Mark</td>
													<td>Otto</td>
													<td>@mdo</td>
													<td>12/10/23</td>
													<td>Otto</td>
													<td>12/10/23</td>
													<td>Activo</td>
													<td class="la la-remove" style="color:red;">eliminar</td>
													<td class="la la-edit" style="color:blue">editar</td>
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-primary la la-calendar-check-o" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat" style="border-radius: 1% 20% 1% 20%;">Agendar uma consulta</button>
							<button type="button" class="btn btn-outline-danger" style="border-radius: 1% 20% 1% 20%;"><a href="/Dashboard" class="la la-undo" >acesso rápido</a></button>
						</div>
					</div>
				</div>
				
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-fullscreen">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title fs-5" id="exampleModalLabel">Registe-se aqui!</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form @submit.prevent="handleSubmit">
							<div class="mb-3">
								<label for="name" class="col-form-label">Primeiro nome</label>
								<input v-model="name" type="text" class="form-control" id="recipient-name">
							</div>
							<div class="mb-3">
								<label for="recipient-name" class="col-form-label">Apelido</label>
								<input v-model="apelido" type="text" class="form-control" id="recipient-name">
							</div>
							<div class="mb-3">
								<label for="email" class="col-form-label">Email</label>
								<input v-model="email" type="text" class="form-control" id="email">
							</div>
							<div class="mb-3">
								<label for="password" class="col-form-label">Senha</label>
								<input v-model="password" type="password" class="form-control" id="password">
							</div>
							
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary" @click="handleSubmit" value="submit">enviar</button>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<footer class="footer">
					<div class="container-fluid">
						<nav class="pull-left">
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link" href="/">
										SGPF
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/">
										Ajuda
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/">
										Licenciado
									</a>
								</li>
							</ul>
						</nav>
						<div class="copyright ml-auto">
							2020, Desenvolvido <i class="la la-heart heart text-danger"></i> por <a href="/">SGPF</a>
						</div>				
					</div>
				</footer>
</template>
<style scoped>
.main-header{
	background: rgb(77, 124, 254)
}
</style>