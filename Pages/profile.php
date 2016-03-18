<?= HTML::style("css/profile.css") ?>
<div class="container">
	<div class="row">
   <div class="panel panel-info">
    <div class="panel-heading">
     <h3 class="panel-title">João António Correia Lopes</h3>
   </div>
   <div class="panel-body panel-height">
     <div class="row" >

      <div class=" col-md-2 col-lg-2 "> 
       <table class="table table-user-information">
         <tr>
          <td>Email:</td>
          <td>jlopes@fe.up.pt</td>
        </tr>
        <tr>
        <td>Number of questions:</td>
        <td>6</td>
        </tr>
        <tr>
        <td>Upvotes:</td>
        <td>35</td>
        </tr>
        <tr>
        <td>Description:</td>
        <td>João Correia Lopes is an Assistant Professor in Informatics Engineering at the Universidade do Porto and a researcher at INESC TEC...</td>
        </tr>
      </tbody>
    </table>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit profile</button>
  </div>
</div>

</div>
</div>  
<div class="list-group">
  <a href="?page=question" class="list-group-item">
    <span class="badge">42</span>
    <h4 class="list-group-item-heading"> Question 1</h4>
    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas erat mi, et eleifend erat rutrum vitae. Suspendisse potenti.                In hac habitasse platea dictumst. Etiam velit est, aliquam eu risus ut, hendrerit volutpat ante. Donec in consequat orci. In maximus lobortis risus in porta. Vivamus blandit, felis vitae pretium faucibus, diam risus suscipit purus, ut tempor nulla libero sit amet tortor. Phasellus fermentum turpis eu lectus mattis, vel aliquam ante elementum. Suspendisse ac elit leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas erat mi, et eleifend erat rutrum vitae. Suspendisse potenti.                In hac habitasse platea dictumst. Etiam velit est, aliquam eu risus ut, hendrerit volutpat ante. Donec in consequat orci. In maximus lobortis risus in porta. Vivamus blandit, felis vitae pretium faucibus, diam risus suscipit purus, ut tempor nulla libero sit amet tortor. Phasellus fermentum turpis eu lectus mattis, vel aliquam ante elementum. Suspendisse ac elit leo.</p>
  </a>
  <a href="?page=question" class="list-group-item">
    <span class="badge">42</span>
    <h4 class="list-group-item-heading"> Question 1</h4>
    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas erat mi, et eleifend erat rutrum vitae. Suspendisse potenti.                In hac habitasse platea dictumst. Etiam velit est, aliquam eu risus ut, hendrerit volutpat ante. Donec in consequat orci. In maximus lobortis risus in porta. Vivamus blandit, felis vitae pretium faucibus, diam risus suscipit purus, ut tempor nulla libero sit amet tortor. Phasellus fermentum turpis eu lectus mattis, vel aliquam ante elementum. Suspendisse ac elit leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas erat mi, et eleifend erat rutrum vitae. Suspendisse potenti.                In hac habitasse platea dictumst. Etiam velit est, aliquam eu risus ut, hendrerit volutpat ante. Donec in consequat orci. In maximus lobortis risus in porta. Vivamus blandit, felis vitae pretium faucibus, diam risus suscipit purus, ut tempor nulla libero sit amet tortor. Phasellus fermentum turpis eu lectus mattis, vel aliquam ante elementum. Suspendisse ac elit leo.</p>
  </a>
  <a href="?page=question" class="list-group-item">
    <span class="badge">42</span>
    <h4 class="list-group-item-heading">Question 1</h4>
    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas erat mi, et eleifend erat rutrum vitae. Suspendisse potenti.                In hac habitasse platea dictumst. Etiam velit est, aliquam eu risus ut, hendrerit volutpat ante. Donec in consequat orci. In maximus lobortis risus in porta. Vivamus blandit, felis vitae pretium faucibus, diam risus suscipit purus, ut tempor nulla libero sit amet tortor. Phasellus fermentum turpis eu lectus mattis, vel aliquam ante elementum. Suspendisse ac elit leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas erat mi, et eleifend erat rutrum vitae. Suspendisse potenti.                In hac habitasse platea dictumst. Etiam velit est, aliquam eu risus ut, hendrerit volutpat ante. Donec in consequat orci. In maximus lobortis risus in porta. Vivamus blandit, felis vitae pretium faucibus, diam risus suscipit purus, ut tempor nulla libero sit amet tortor. Phasellus fermentum turpis eu lectus mattis, vel aliquam ante elementum. Suspendisse ac elit leo.</p>
  </a>
</div>
<div calss="text-center">
<button type="button" class="btn btn-primary pull-right">Load more...</button>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Settings</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">New Username:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">New email:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">New password:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Confirm password:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Edit</button>
      </div>
    </div>
  </div>
</div>

