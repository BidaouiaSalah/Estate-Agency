import "./bootstrap";
import "./jquery.min";
import "./bootstrap.bundle.min";
import "./jquery.easing.min";
import "./enchanter";
import "./sb-admin-2.min";
import "./jquery.dataTables.min";
import "./dataTables.bootstrap4.min";


import Swal from "sweetalert2";
import axios from "axios";

$(document).ready(function () {
    // datatable initialization
    $("#dataTable").DataTable();

    // checkbox Multi rows delete logic
    $("#master").on("click", function (e) {
        if ($(this).is(":checked", true)) {
            $(".sub_chk").prop("checked", true);
        } else {
            $(".sub_chk").prop("checked", false);
        }
    });
    $(".delete_all").on("click", function (e) {
        var allVals = [];
        $(".sub_chk:checked").each(function () {
            allVals.push($(this).attr("data-id"));
        });
        if (allVals.length <= 0) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Please select row !",
            });
        } else {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    var join_selected_values = allVals.join(",");

                    axios
                        .delete($(this).data("url"), {
                            params: { ids: join_selected_values },
                        })
                        .then(function (response) {
                            $(".checkbox:checked").each(function () {
                                $(this).parents("tr").remove();
                            });
                            $(".sub_chk").prop("checked", false);
                            $("#master").prop("checked", false);
                            Swal.fire({
                                title: "Success",
                                text: "Select rows has been Deleted !",
                            });
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
            });
        }
    });

});
