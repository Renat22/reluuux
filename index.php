<!DOCTYPE html>
<html ng-app="scotchApp">

<head>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" />
  <link rel="stylesheet" href="/style/css/style.css">

  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>

  <script src="script.js"></script>
  <base href="/content/" />
</head>

<!-- define angular controller -->
<body ng-controller="mainController">

  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand">Angular Routing Example</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="dashboard">DASHBOARD</a></li>
        <li><a href="task_money">ЗАРАБОТОК</a></li>
      </ul>
    </div>
  </nav>

	<div style="display: flex;">
		<div class="menu-site">
			<a href="dashboard">dashboard</a>
			<a href="add_task">add task</a>
			<a href="my_task">my task</a>
		</div>
		 <div id="main">
		    <div ng-view></div>
		</div>
	</div>
  
  <footer class="text-center"><p>HEADER</p></footer>
  
</body>
</html>