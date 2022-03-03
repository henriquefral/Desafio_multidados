<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove"></a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
 
				<li class="start active ">
					<a href="index.html">
					<i class="fa fa-home"></i>
					<span class="title">
						Dashboard
					</span>
					<span class="selected">
					</span>
					</a>
				</li>  
				<!--Cliente-->
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-file-text"></i>
					<span class="title" id='title'>
						Cadastro
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu" id="listaCadastro">

					</ul>
				</li>
                <script type="module">  

                import { dataCadastro } from './data.js';
                
                var listaCadastro = document.getElementById('listaCadastro');
            
                dataCadastro.forEach(function(options) {
                        var li = document.createElement("li");
                        var a = document.createElement("a");
                        a.textContent = options;
                        li.appendChild(a);
                        listaCadastro.appendChild(li);
                })            

                </script>
				<!--Relatorio-->
				<li class="">
					<a href="javascript:;">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title" id='title'>
						Relatório
					</span>
					<span class="arrow ">
					</span>
					</a>
					<ul class="sub-menu" id='listaRelatorio'>
					</ul>
				</li>
                <script type="module">  

                    import { dataRelatorio } from './data.js';

                    var listaRelatorio = document.getElementById('listaRelatorio');

                    dataRelatorio.forEach(function(data) {
                        var li = document.createElement("li");
                        var a = document.createElement("a");
                        a.textContent = data;
                        li.appendChild(a);
                        listaRelatorio.appendChild(li);
                    });
                </script>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>