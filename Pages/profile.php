<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">João António Correia Lopes</h3>
				</div>
				<div class="panel-body">
					<div class="row">

						<div class=" col-md-9 col-lg-9 "> 
							<table class="table table-user-information">
									<tr>
										<td>Email:</td>
										<td>jlopes@fe.up.pt</td>
									</tr>

								</tbody>
							</table>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit profile</button>
          </div>
      </div>
  </div>
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
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>