<!doctype html>
<html lang="en">
<head>
	<title></title>
</head>
<body>
	<h1>Hello World</h1>
 
	<script src="js/underscore.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/backbone.js"></script>
 
	<script>
		(function() {
			window.App = {
				Models: {},
				Views: {},
				Collections: {}
			};
 
			App.Models.Task = Backbone.Model.extend({
				defaults: {
					title: '',
					completed: 0,
					id: ''
				},
 
				urlRoot: 'tasks'
			});
		}());
 
	</script>
 
</body>
</html>