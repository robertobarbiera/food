<div>
  Cerca: <input ng-model="query">
</div>
<ul>
  <li ng-repeat="photo in photos | filter:query | orderBy:'description'">
    <p>
      {{photo.description}}
    </p>
  </li>
</ul>