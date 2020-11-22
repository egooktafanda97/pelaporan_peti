<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- ... other HTML ... -->
	<div id="root"></div>
	<!-- Load React. -->
	<!-- Note: when deploying, replace "development.js" with "production.min.js". -->
	<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
	<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
	<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
	<script type="text/babel" src="<?=base_url('js/app.js')?>"></script>
</body>
</html>