$(function()
    {
        var e={};
        $(".table-edits tr").editable(
            {
                dropdowns:{gender:["Male","Female"]},
                edit:function(t)
                {
                    $(".edit i",this)
                },
                save:function(t)
                {
                    $(".edit i",this)
                        .removeClass("fa-save")
                        .addClass("fa-pencil-alt")
                        .attr("title","Edit"),
                    this in e&&(e[this].destroy(),delete e[this])
                },
                cancel:function(t)
                {
                    $(".edit i",this)
                        .removeClass("fa-save")
                        .addClass("fa-pencil-alt")
                        .attr("title","Edit"),
                    this in e&&(e[this].destroy(),delete e[this])
                }
            }
        )
    }
);
