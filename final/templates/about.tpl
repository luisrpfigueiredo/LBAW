{include file='common/header.tpl'}

<div class = "container">
    <?php render('breadcrumb') ?>

    <div class = "panel panel-default">
        <div class = "panel-heading">
            <h3 class = "panel-title">About Us</h3>
        </div>
        <div class = "panel-body">
            <p>
                This project is intended for the specification, development and promotion of an information system available through the Web to manage questions and their respective answers in a collaborative environment.
            </p>
            <p>
                Users can hereby share their knowledge , thus creating up one self-help community.
            </p>
            <p>
                The system must first enable registration and user authentication , as well as a user -registration . The system should also provide information loading facilities of user questions , charging answers to questions from users , per-user research facilities (eg list all the questions and answers made ​​by a user ) and features of evaluation questions and answers ( assign a rating to the question and responses by votes) .
            </p>
            <p>
                There must be registered common- use profiles that may consult the information and register your questions , as well as add answers to existing questions . Can additionally add your vote ( positive or negative) the questions to which they have access. There should also be management profiles that have all access privileges. Administrators have operating privileges , information entry privileges on the system and modification of non-administrator user profiles ( remove the user , banning temporarily promote administrator).
            </p>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}
