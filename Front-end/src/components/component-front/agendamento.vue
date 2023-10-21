<script>
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
				<a href="/" class="logo" style="color:white">
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
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img :src="user" :alt="descricao" width="36" class="img-circle"><span style="color:white">Hizrian</span></a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img :src="user" :alt="descricao" width="36" class="img-circle"></div>
										<div class="u-text">
											<h4 style="color:white">Hizrian</h4>
											<p class="text-muted">hello@themekita.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-user"></i> Meu Perfil</a>
									
									<a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Sair</a>
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
								<span style="color:white">
									Hizrian
									<span class="user-level" style="color:white">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse" style="color:white">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse" style="color:white">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse" style="color:white">Settings</span>
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
							<a href="/Historico">Agendamentos</a>
							<a href="/Historico">Documentos</a>
							</div>
						</li>

						</ul>

				</div>
			</div>

			<div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                  
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>Agendamento Medico</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Nome :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Apelido :</label>
                                <input type="text" name="father_name" id="father_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="number">Celular :</label>
                            <input type="number" name="number" id="number" required/>
                        </div>
                      
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">Provincia :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value=""></option>
                                        <option value="us">Maputo</option>
                                        <option value="uk">Maputo cidade</option>
                                        <option value="us">Gaza</option>
                                        <option value="uk">Inhambane</option>
                                        <option value="us">Sofala</option>
                                        <option value="uk">Manica</option>
                                        <option value="us">Zambezia</option>
                                        <option value="uk">Tete</option>
                                        <option value="us">Nampula</option>
                                        <option value="uk">Cabo Delgado</option>
                                        <option value="us">Niassa</option>
                                       
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">Distrito :</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                        <option value=""></option>
                                        <option value="Manhiça">Manhiça</option>
                                        <option value="Bilene">Bilene</option>
                                        <option value="Maxixe">Maxixe</option>
                                        <option value="gondola">Gondola</option>
                                        <option value="pemba">Pemba</option>
                                        <option value="Xai-xa-">Xai-Xai</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date">Data do encontro:</label>
                            <input type="date" name="date" id="birth_date">
                        </div>
                       
                        <div class="form-group">
                            <label for="course">Hospital</label>
                            <div class="form-select">
                                <select name="course" id="course">
                                    <option value="">HCM</option>
                                    <option value="">HCN</option>
                                    <option value="">Hospita provincial</option>
                                    <option value="">Hospital Rural</option>
                                  
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                      
                        <div class="form-submit">
                            <button type="button" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-danger">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
			</div>
	
</template>
<style scoped>

.sidebar{
	background: rgb(3, 83, 70);
}
.main-header{
	background: linear-gradient(rgb(14, 196, 174), rgb(8, 186, 156));
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