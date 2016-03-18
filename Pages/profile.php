<?= HTML::style("css/profile.css") ?>
<div class = "container">
    <div class = "row">
        <div class = "panel panel-default">
            <div class = "panel-heading">
                <h3 class = "panel-title">João António Correia Lopes</h3>
            </div>
            <div class = "panel-body panel-height">
                <div class = "row">

                    <div class = " col-md-2 col-lg-2 ">
                        <table class = "table table-user-information">
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
                                <td>João Correia Lopes is an Assistant Professor in Informatics Engineering at the Universidade do Porto and a researcher at INESC TEC,

                                    He has graduated in Electrical Engineering in the University of Porto in 1984 and holds a PhD in Computing Science by Glasgow University in 1997.

                                    His teaching includes undergraduate and graduate courses in databases and web applications, software engineering and programming, markup languages and semantic web.

                                    He has been involved in research projects in the area of long-term preservation, service-oriented architectures and e-Science.
                                    Currently his main research interests are e-Science and research data management. João Correia Lopes is an Assistant Professor in Informatics Engineering at the Universidade do Porto and a researcher at INESC TEC,

                                    He has graduated in Electrical Engineering in the University of Porto in 1984 and holds a PhD in Computing Science by Glasgow University in 1997.

                                    His teaching includes undergraduate and graduate courses in databases and web applications, software engineering and programming, markup languages and semantic web.

                                    He has been involved in research projects in the area of long-term preservation, service-oriented architectures and e-Science.
                                    Currently his main research interests are e-Science and research data management. João Correia Lopes is an Assistant Professor in Informatics Engineering at the Universidade do Porto and a researcher at INESC TEC,

                                    He has graduated in Electrical Engineering in the University of Porto in 1984 and holds a PhD in Computing Science by Glasgow University in 1997.

                                    His teaching includes undergraduate and graduate courses in databases and web applications, software engineering and programming, markup languages and semantic web.

                                    He has been involved in research projects in the area of long-term preservation, service-oriented architectures and e-Science.
                                    Currently his main research interests are e-Science and research data management. João Correia Lopes is an Assistant Professor in Informatics Engineering at the Universidade do Porto and a researcher at INESC TEC,

                                    He has graduated in Electrical Engineering in the University of Porto in 1984 and holds a PhD in Computing Science by Glasgow University in 1997.

                                    His teaching includes undergraduate and graduate courses in databases and web applications, software engineering and programming, markup languages and semantic web.

                                    He has been involved in research projects in the area of long-term preservation, service-oriented architectures and e-Science.
                                    Currently his main research interests are e-Science and research data management. João Correia Lopes is an Assistant Professor in Informatics Engineering at the Universidade do Porto and a researcher at INESC TEC,

                                    He has graduated in Electrical Engineering in the University of Porto in 1984 and holds a PhD in Computing Science by Glasgow University in 1997.

                                    His teaching includes undergraduate and graduate courses in databases and web applications, software engineering and programming, markup languages and semantic web.

                                    He has been involved in research projects in the area of long-term preservation, service-oriented architectures and e-Science.
                                    Currently his main research interests are e-Science and research data management.
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <button type = "button" class = "btn btn-primary" data-toggle = "modal" data-target = "#exampleModal" data-whatever = "@mdo">Edit profile</button>
                    </div>
                </div>

            </div>
        </div>
        <h1 class="results">My Questions</h1>
        <div class = "question-space">
            <?php
            for ($i = 0; $i < 3; $i++) {
                render('question-info');
            }
            ?>
        </div>

    </div>
</div>



