<html ng-app="App">
<head>
    <script src="js/angular.js"></script>
    <script src="js/app.js"></script>
  <style>
  .done{
    color:#ccc;
    text-decoration: line-through;
  }
  ul{
    list-style: none;
  }
    </style>
</head>
<body>
  <div ng-controller="todos">
    <h1>Görevler</h1>
    <ul>
      <li ng-repeat="todo in todos">
     <input type="checkbox" ng-model="todo.yapildimi">
        <span ng-class="{'done':todo.yapildimi}">{{todo.isim}}</span>
      </li>
    </ul>
    <button ng-click="sil()">SİL</button>
    <form ng-submit="newTodo()" name="frm" novalidate>
      <input type="text" ng-model="todo" placeholder="Görev Ekle" required>
      <input type="submit" ng-disabled="frm.$invalid"  value="Ekle">
    </form>
 </div>
</body>
</html>
