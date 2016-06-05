{include file='common/header.tpl'}

<div class = "container">
    <?php render('breadcrumb') ?>

    <div class = "panel panel-default">
        <div class = "panel-heading">
            <h3 class = "panel-title">About Us</h3>
        </div>
        <div class = "panel-body">
            <p>
                This project is intended for the specification, development and promotion of an information system, available through the Web, to help manage questions and their respective answers in a collaborative environment.
            </p>
            <p>
                Users can hereby share their knowledge , thus creating a self-help community.
            </p>
            <p>
                The system must first allow for user registration and user authentication. The system should also allow for this knowledge to be visualized in an intuitive way (eg search questions and answers by their name and tags ), as well as have features of knowledge evaluation, such as assigning a rating to a question or answer .
            </p>
            <p>
                There must be registered, common-use profiles assigned to each authenticated user in order to allow users to consult and create their own questions , as well as add answers, under their own name, to existing questions, as well as add a vote ( positive or negative) as described above. There should also be management profiles that have permission to warn users for inappropriate behaviour. Administrators have operating privileges , information entry privileges on the system and modification of non-administrator user profiles.
            </p>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}
