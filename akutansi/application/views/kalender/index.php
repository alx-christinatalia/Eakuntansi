<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="page-title">
                <h1 style="display: inline-block;"><?php echo $title; ?></h1> &nbsp;
                <ul class="page-breadcrumb breadcrumb" style="display: inline-block;">
                    <li>
                        <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Kalender</span>
                    </li>
                </ul>
            </div>
        </div>  
        <div class="col-md-6 col-sm-12 col-xs-12 text-right">
            <div class="title-action form-inline">
                <div class="form-group text-center">
                    <div class="input-group input-search">
                        <input type="text" name="search" placeholder="Cari kegiatan" class="form-control" id="search"> 
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
                <div class="form-group text-center form-action">
                    <button type="button" class="btn btn-primary" onclick="showModal()">
                        <i class="fa fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-primary" id="user_filter"><i class="fa fa-user"></i>&nbsp;&nbsp;<span id="filter_user">Saya</span></button>
                    <button type="button" class="btn btn-primary" id="list"><i class="fa fa-list"></i></button>
                    <button type="button" class="btn btn-primary" onclick="location.reload();" title="Refresh Data (Reload Halaman)">
                        <i class="fa fa-refresh"></i>
                    </button>
                </div>
            </div>
        </div> 
    </div>
    <!-- END PAGE TITLE -->
</div>
<!-- END PAGE HEAD-->

<!-- BEGIN PAGE BASE CONTENT -->
<div class="base-content">
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered table-list">
                <div class="portlet-body">
                    <div class="table-container">
                        <div id="mycalendar">
                            
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE BASE CONTENT -->

<!-- Add Event Modal -->
<div class="modal fade" id="addEvent" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="titleInUp">Tambah Kegiatan</h4>
            </div>
            <form action="<?php //echo site_url('kalender/add_event'); ?>" method="post" id="formAdd" class="form-horizontal">
                <div class="modal-body">
                    <input type="hidden" id="id">
                    <div class="form-group">
                        <label for="judul" class="col-md-2 control-label">Judul</label>
                        <div class="col-md-10">
                            <input type="text" name="judul" id="judul" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 pull-right">
                            <div class="md-checkbox">
                                <input type="checkbox" id="allday" class="md-check" checked>
                                <label for="allday">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Sepanjang Hari
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="time">
                        <label class="col-md-2 control-label">Jam</label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input type="text" class="form-control time" name="start_time" id="start_time" value="<?php echo date('h:i A'); ?>">
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" readonly value="S/D" style="border: none; text-align: center">
                                </div>
                                <div class="col-md-5 time">
                                    <div class="input-group">
                                        <input type="text" class="form-control time" name="end_time" id="end_time">
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="col-md-2 control-label">Tanggal</label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control" name="tanggal" id="tanggal">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="uraian" class="col-md-2 control-label">Uraian</label>
                        <div class="col-md-10">
                            <textarea name="uraian" class="form-control" id="uraian" style="width: 100%;" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="peserta" class="col-md-2 control-label">Peserta</label>
                        <div class="col-md-10">
                            <select name="peserta" id="peserta" class="form-control" multiple="multiple" required>
                                <?php foreach ($users->Data as $user) : ?>
                                    <option value="<?php echo $user->nama; ?>" <?php echo ($this->session->userdata("user")->nama == $user->nama) ? 'selected' : ''; ?>><?php echo $user->nama; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pengingat" class="col-md-2 control-label">Pengingat</label>
                        <div class="col-md-3 pull-left">
                            <div class="md-checkbox">
                                <input type="checkbox" id="pengingat" class="md-check" checked>
                                <label for="pengingat">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Tidak Perlu
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="reminder">
                        <label for="" class="col-md-2 control-label"> </label>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="num_rem" value="1">
                            </div>
                            <div class="col-md-3">
                                <select name="remind" id="day_rem" class="form-control">
                                    <option value="hari">Hari</option>
                                    <option value="jam">Jam</option>
                                    <option value="menit">Menit</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Sebelumnya</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="progres" class="col-md-2 control-label">Progres</label>
                        <div class="col-md-10">
                            <select name="progres" id="progres" class="form-control">
                                <option value="#337ab7">Baru</option>
                                <option value="#f0ad4e">Dikerjakan</option>
                                <option value="#5cb85c">Selesai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.Add Event Modal -->

<!-- Edit Event Modal -->
<div class="modal fade" id="editEvent" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="titleInUp">Edit Kegiatan</h4>
            </div>
            <form action="#" id="formEdit" class="form-horizontal">
                <div class="modal-body">
                    <input type="hidden" id="edit_id">
                    <div class="form-group">
                        <label for="edit_judul" class="col-md-2 control-label">Judul</label>
                        <div class="col-md-10">
                            <input type="text" name="edit_judul" id="edit_judul" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 pull-right">
                            <div class="md-checkbox">
                                <input type="checkbox" id="edit_allday" class="md-check">
                                <label for="edit_allday">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Sepanjang Hari
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="edit_time">
                        <label class="col-md-2 control-label">Jam</label>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input type="text" class="form-control time" id="edit_start_time">
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" readonly value="S/D" style="border: none; text-align: center">
                                </div>
                                <div class="col-md-5 time">
                                    <div class="input-group">
                                        <input type="text" class="form-control time" id="edit_end_time">
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_tanggal" class="col-md-2 control-label">Tanggal</label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control" id="edit_tanggal">
                                 <span class="input-group-addon" >
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_uraian" class="col-md-2 control-label">Uraian</label>
                        <div class="col-md-10">
                            <textarea name="edit_uraian" class="form-control" id="edit_uraian" style="width: 100%;" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_peserta" class="col-md-2 control-label">Peserta</label>
                        <div class="col-md-10">
                            <select name="edit_peserta" id="edit_peserta" class="form-control" multiple="multiple">
                                <?php foreach ($users->Data as $user) : ?>
                                    <option value="<?php echo $user->nama; ?>"><?php echo $user->nama; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_pengingat" class="col-md-2 control-label">Pengingat</label>
                        <div class="col-md-4 pull-left">
                            <div class="md-checkbox">
                                <input type="checkbox" id="edit_pengingat" class="md-check">
                                <label for="edit_pengingat">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Tidak Perlu
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="edit_reminder">
                        <label for="" class="col-md-2 control-label"> </label>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="edit_num_rem">
                            </div>
                            <div class="col-md-3">
                                <select name="edit_day_rem" id="edit_day_rem" class="form-control">
                                    <option value="hari">Hari</option>
                                    <option value="jam">Jam</option>
                                    <option value="menit">Menit</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Sebelumnya</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_progres" class="col-md-2 control-label">Progres</label>
                        <div class="col-md-10">
                            <select name="edit_progres" id="edit_progres" class="form-control">
                                <option value="#337ab7">Baru</option>
                                <option value="#f0ad4e">Dikerjakan</option>
                                <option value="#5cb85c">Selesai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.Edit Event Modal -->
        
<script>
    var eventData;

    function formatDate(date) {
        var d = new Date(date);
        d.setDate(d.getDate()),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

        if (month.length < 2) month = '0' + month;
        if (day.length < 2) day = '0' + day;

        return [year, month, day].join('-');
    }

    function formatDatePlus(date) {
        var d = new Date(date);
        d.setDate(d.getDate() + 1),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

        if (month.length < 2) month = '0' + month;
        if (day.length < 2) day = '0' + day;

        return [year, month, day].join('-');
    }

    function formatDateMin(date) {
        var d = new Date(date);
        d.setDate(d.getDate() - 1),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

        if (month.length < 2) month = '0' + month;
        if (day.length < 2) day = '0' + day;

        return [year, month, day].join('-');
    }

    function showModal() {
        $("#formAdd")[0].reset();

        if ($("#pengingat").is(':checked')) {
            $("#reminder").hide();
        } else {
            $("#reminder").show();
        }

        $("#tanggal").daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            }
        });

        if ($("#allday").is(':checked')) {
            $("#time").hide();
        } else {
            $("#time").show();
        }

        $(".help-block").remove();
        $(".form-group").removeClass('has-error');

        $.post('<?php echo site_url('kalender/fetch_last_id'); ?>', function (response) {
            $("#id").val(response);
        });

        $("#addEvent").modal('show');

        $("#addEvent").on('shown.bs.modal', function () {
            $("#judul").focus();

            var time = $("#start_time").val().slice(0, 5);
            var endTime = moment(time, 'HH:mm').add(30, 'm').format('HH:mm');
            $("#end_time").val(endTime+" <?php echo date('A'); ?>");
        })
    }

    function showDetail(id) {
        $("#formEdit")[0].reset();

        $(".form-group").removeClass('has-error');
        $(".help-block").remove();

        $.ajax({
            url: '<?php echo site_url('kalender/show_data'); ?>'+'/'+id,
            type: 'POST',
            dataType: 'json'
        }).done(function (response) {
            var data = response.Data[0];

            var user = data.user.split(",");

            eventData = $("#mycalendar").fullCalendar('clientEvents', id)[0];

            $("#edit_id").val(data._id);
            $("#edit_judul").val(data.title);
            
            if (data.isallday == '0') {
                $("#edit_allday").prop('checked', false);
                $("#edit_time").show();
                $("#edit_start_time").val(data.min_time);
                $("#edit_end_time").val(data.max_time);
            } else {
                $("#edit_allday").prop('checked', true);
                $("#edit_time").hide();
                $("#edit_start_time").val('<?php echo date('h:i A'); ?>');

                var time = $("#edit_start_time").val().slice(0, 5);
                var editEndTime = moment(time, 'HH:mm').add(30, 'm').format('HH:mm');

                $("#edit_end_time").val(editEndTime+" <?php echo date('A'); ?>");
            }

            $("#edit_tanggal").daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                startDate: data.start,
                endDate: (data.isallday == '1' ? formatDateMin( data.end ) : data.end)
            });

            $("#edit_tanggal").val((data.isallday == '1' ? formatDate(data.start)+' - '+formatDateMin(data.end) : formatDate(data.start)+' - '+formatDate(data.end)));
            $("#edit_uraian").val(data.uraian);
            $("#edit_peserta").val(user).trigger('change');

            if (data.reminder == '0') {
                $("#edit_pengingat").prop('checked', false);
                $("#edit_reminder").show();
                $("#edit_num_rem").val(data.num_rem);
                $("#edit_day_rem").val(data.day_rem);
            } else {
                $("#edit_pengingat").prop('checked', true);
                $("#edit_reminder").hide();
                $("#edit_num_rem").val('1');
            }

            $("#edit_progres").val(data.progres);
        });

        $("#editEvent").modal('show');

        $("#editEvent").on('shown.bs.modal', function () {
            $("#edit_judul").focus();
        });
    }

    function getMonth(e) {
        var a;
        switch (e) {
            case 1:
                a = "Januari";
                break;
            case 2:
                a = "Februari";
                break;
            case 3:
                a = "Maret";
                break;
            case 4:
                a = "April";
                break;
            case 5:
                a = "Mei";
                break;
            case 6:
                a = "Juni";
                break;
            case 7:
                a = "Juli";
                break;
            case 8:
                a = "Agustus";
                break;
            case 9:
                a = "September";
                break;
            case 10:
                a = "Oktober";
                break;
            case 11:
                a = "November";
                break;
            case 12:
                a = "Desember";
                break;
            default:
                a = e;
        }

        return a;
    }

    function deleteEvent(element, id) {
        swal({
            title: "Apakah ada yakin?",
            text: "Data yang dihapus tidak dapat dikembalikan.",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d9534f",
            confirmButtonText: "Hapus",
            cancelButtonText: "Batal",
            closeOnConfirm: true,
            closeOnCancel: true
        },
        function (isConfirm) {
            if (isConfirm) {
                $(element).parent().parent().parent().remove();

                $.post(
                    '<?php echo site_url('kalender/delete_event') ?>'+'/'+id,
                    function () {
                        setTimeout(function() {
                            toastr.options = {
                                closeButton: true,
                                progressBar: true,
                                showMethod: 'slideDown',
                                positionClass: "toast-top-right",
                                timeOut: 2000,
                                onclick: null,
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                            };
                            toastr["success"]('Data berhasil dihapus.', 'Terhapus!');
                        }, 10);

                        $("#mycalendar").fullCalendar('removeEvents', id);
                    }
                );
                if ($("#list2 > tr").length == 0) {
                    if ($("#list2").parent().parent().find("span").length > 0) {
                        $(this).remove();
                    } else {
                        $("#list2").parent().parent().append('<span style="display: block; text-align: center;">Data kosong.</span>').css('backgroundColor', '#f3f4f6');
                    }
                }

                if ($("#list1 > tr").length == 0) {
                    if ($("#list1").parent().parent().find("span").length > 0) {
                        $(this).remove();
                    } else {
                        $("#list1").parent().parent().append('<span style="display: block; text-align: center;">Data kosong.</span>').css('backgroundColor', '#f3f4f6');
                    }
                }
            }
        });
    }

    function dateToday() {
        $("#mycalendar").fullCalendar('today');
    }

    function get_admin() {
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('user/get_admin'); ?>',
            dataType: "json",
            success: function(result) { 
                $("#notaris-span").html(result["nama"]);  
            }
        });
    }

    function refresh_jumlah() {
        $("#jumlah_remind").empty();

        return $.post('<?php echo site_url('kalender/jumlah_reminder'); ?>', function (res) {
            $("#jumlah_remind").append(res);
        });
    }

    function filterSemua() {
        return $.ajax({
            url: '<?php echo site_url('kalender/show_event'); ?>',
            type: 'POST',
            dataType: 'json'
        }).done(function (res) {
            var data = res.Data;

            $("#mycalendar").fullCalendar('removeEventSources');
            $('#mycalendar').fullCalendar('addEventSource', data);
        });
    }

    function filterSaya() {
        return $.ajax({
            url: '<?php echo site_url('kalender/filter_user'); ?>',
            type: 'POST',
            data: { "user" : "<?php echo $this->session->userdata("user")->nama; ?>" },
            dataType: 'json'
        }).done(function (res) {
            var data = res.Data;
            
            $("#mycalendar").fullCalendar('removeEventSources');
            $('#mycalendar').fullCalendar('addEventSource', data);
        });
    }

    $(document).ready(function(){
        get_admin();

        refresh_jumlah();

        $("#user_filter").click(function () {
            $(this).children('i').toggleClass('fa-user fa-users').promise().done(function () {
                if ($(this).hasClass('fa-user')) {
                    $("#filter_user").empty();
                    $("#filter_user").append('Saya');

                    filterSemua();
                } else {
                    $("#filter_user").empty();
                    $("#filter_user").append('Semua');

                    filterSaya();
                }
            });
        });

        $("#list").click(function () {
            $(this).children().toggleClass('fa-list fa-calendar').promise().done(function () {
                if ($(this).hasClass('fa-list')) {
                    $(".fc-view").show();
                    $("#mycalendar").fullCalendar('rerenderEvents');
                    $(".fc-center").removeClass('pull-right');
                    $(".fc-right > .fc-button-group").show();
                    $(".eventlist").hide();
                } else {
                    $(".fc-view").hide();
                    $(".fc-right > .fc-button-group").hide();
                    $(".fc-center").addClass('pull-right');
                    $(".eventlist").show();
                }
            });
        });

        var form_add = $("#formAdd"), form_edit = $("#formEdit");

        $("#tanggal").daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            }
        });

        $("#edit_tanggal").daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            }
        });

        $("#allday").change(function () {
            $("#time").slideToggle();
        });

        $("#edit_allday").change(function () {
            $("#edit_time").slideToggle();
        });

        $("#pengingat").change(function () {
            $("#reminder").slideToggle();
        });

        $("#edit_pengingat").change(function () {
            $("#edit_reminder").slideToggle();
        });

        if ($("#pengingat").is(':checked')) {
            $("#reminder").hide();
        } else {
            $("#reminder").show();
        }

        if ($("#allday").is(':checked')) {
            $("#time").hide();
        } else {
            $("#time").show();
        }

        $("#peserta").select2();

        $("#edit_peserta").select2();

        $(".time").datetimepicker({
            format: 'hh:mm A',
        });

        $.ajax({
            url: '<?php echo site_url('kalender/show_event'); ?>',
            type: 'POST',
            dataType: 'json'
        }).done(function (response) {
            var data = response.Data;

            $("#mycalendar").fullCalendar({
                header: {
                    left: '',
                    center: 'prev title next',
                    right: 'month,agendaWeek,agendaDay,'
                },
                views: {
                    day: {
                        titleFormat: 'dddd, D MMMM YYYY'
                    }
                },
                lang: 'id',
                defaultDate: new Date(),
                eventLimit: true,
                selectable: true,
                editable: true,
                displayEventEnd: true,
                events: data,
                eventMouseover: function (data, event, view) {
                    $('#tooltip').remove();
                    var element = $(this);

                    $.post('<?php echo site_url('kalender/show_data'); ?>'+'/'+data.id, function (res) {
                        res = $.parseJSON(res);
                        res = res.Data[0];

                        tooltip = '<div id="tooltip"><b>'+res.user+'</b> :&nbsp;'+res.title+'</div>';
                        $("body").append(tooltip);
                        element.mouseover(function (e) {
                            element.css('z-index', 10000);
                            $('#tooltip').fadeIn('500');
                            $('#tooltip').fadeTo('10', 1.9);
                        }).mousemove(function (e) {
                            $('#tooltip').css('top', e.pageY + -70);
                            $('#tooltip').css('left', e.pageX + -40);
                        });
                    });
                },
                eventMouseout: function (data, event, view) {
                    $(this).css('z-index', 8);

                    $('#tooltip').remove();
                },
                select: function (start, end, jsEvent, view) {
                    form_add[0].reset();

                    if ($("#pengingat").is(':checked')) {
                        $("#reminder").hide();
                    } else {
                        $("#reminder").show();
                    }

                    if ($("#allday").is(':checked')) {
                        $("#time").hide();
                    } else {
                        $("#time").show();
                    }

                    $(".help-block").remove();
                    $(".form-group").removeClass('has-error');

                    $.post('<?php echo site_url('kalender/fetch_last_id'); ?>', function (response) {
                        $("#id").val(response);
                    });

                    $("#tanggal").daterangepicker({
                        locale: {
                            format: 'YYYY-MM-DD'
                        },
                        startDate: start.format(),
                        endDate: formatDateMin(end.format())
                    });

                    $("#addEvent").modal('toggle');

                    $("#addEvent").on('shown.bs.modal', function () {
                        $("#judul").focus();

                        var time = $("#start_time").val().slice(0, 5);
                        var endTime = moment(time, 'HH:mm').add(30, 'm').format('HH:mm');
                        $("#end_time").val(endTime+" <?php echo date('A'); ?>");
                    });
                },
                eventClick: function (calEvent, jsEvent, view) {
                    eventData = calEvent;

                    form_edit[0].reset();

                    $(".form-group").removeClass('has-error');
                    $(".help-block").remove();

                    $.ajax({
                        url: '<?php echo site_url('kalender/show_data'); ?>'+'/'+calEvent.id,
                        type: 'POST',
                        dataType: 'json'
                    }).done(function (response) {
                        var data = response.Data[0];

                        var user = data.user.split(",");

                        $("#edit_id").val(data._id);
                        $("#edit_judul").val(data.title);
                        
                        if (data.isallday == '0') {
                            $("#edit_allday").prop('checked', false);
                            $("#edit_time").show();
                            $("#edit_start_time").val(data.min_time);
                            $("#edit_end_time").val(data.max_time);
                        } else {
                            $("#edit_allday").prop('checked', true);
                            $("#edit_time").hide();
                            $("#edit_start_time").val('<?php echo date('h:i A'); ?>');

                            var time = $("#edit_start_time").val().slice(0, 5);
                            var editEndTime = moment(time, 'HH:mm').add(30, 'm').format('HH:mm');

                            $("#edit_end_time").val(editEndTime+" <?php echo date('A'); ?>");
                        }

                        $("#edit_tanggal").daterangepicker({
                            locale: {
                                format: 'YYYY-MM-DD'
                            },
                            startDate: data.start,
                            endDate: (data.isallday == '1' ? formatDateMin( data.end ) : data.end)
                        });

                        $("#edit_tanggal").val((data.isallday == '1' ? formatDate(data.start)+' - '+formatDateMin(data.end) : formatDate(data.start)+' - '+formatDate(data.end)));
                        $("#edit_uraian").val(data.uraian);
                        $("#edit_peserta").val(user).trigger('change');

                        if (data.reminder == '0') {
                            $("#edit_pengingat").prop('checked', false);
                            $("#edit_reminder").show();
                            $("#edit_num_rem").val(data.num_rem);
                            $("#edit_day_rem").val(data.day_rem);
                        } else {
                            $("#edit_pengingat").prop('checked', true);
                            $("#edit_reminder").hide();
                            $("#edit_num_rem").val('1');
                        }

                        $("#edit_progres").val(data.progres);
                    });

                    $("#editEvent").modal('show');

                    $("#editEvent").on('shown.bs.modal', function () {
                        $("#edit_judul").focus();
                    });
                },
                eventDrop: function (event, delta, revertFunc) {
                    $("#mycalendar").fullCalendar('updateEvent', event);

                    var param = {
                        '_id': event.id,
                        'start': event.start.format(),
                        'end': event.start.format(),
                        'isallday': ((event.allDay == true ) ? '1' : '0' ),
                        'min_time': ((event.allDay == false) ? event.start.format("hh:mm")+" <?php echo date('A'); ?>" : null),
                        'max_time': ((event.allDay == false) ? event.start.format("hh:mm")+" <?php echo date('A'); ?>" : null),
                        'pengedit': '<?php echo $this->session->userdata("user")->nama; ?>'
                    }

                    $.post(
                        '<?php echo site_url('kalender/update_event'); ?>'+'/'+event.id,
                        { param: param },
                        function () {
                            setTimeout(function() {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'slideDown',
                                    positionClass: "toast-top-right",
                                    timeOut: 2000,
                                    onclick: null,
                                    showMethod: "fadeIn",
                                    hideMethod: "fadeOut",
                                };
                                toastr["success"](event.start.format("YYYY-MM-DD")+' - '+(event.allDay == false ? event.start.format("YYYY-MM-DD") : formatDateMin( event.start.format("YYYY-MM-DD") )), '"'+event.title+'" berhasil diubah ke tanggal :');
                            }, 10);
                        }
                    )
                },
                eventResize: function (event, delta, revertFunc) {
                    var param = {
                        '_id': event.id,
                        'start': event.start.format("YYYY-MM-DD[T]HH:mm:ss"),
                        'end': event.end.format("YYYY-MM-DD[T]HH:mm:ss"),
                        'min_time': ((event.allDay == false) ? event.start.format("hh:mm A") : null),
                        'max_time': ((event.allDay == false) ? event.end.format("hh:mm A") : null),
                        'pengedit': '<?php echo $this->session->userdata("user")->nama; ?>'
                    };

                    $.post(
                        '<?php echo site_url('kalender/update_event'); ?>'+'/'+event.id,
                        { param: param },
                        function () {
                            setTimeout(function() {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'slideDown',
                                    positionClass: "toast-top-right",
                                    timeOut: 2000,
                                    onclick: null,
                                    showMethod: "fadeIn",
                                    hideMethod: "fadeOut",
                                };
                                toastr["success"](event.start.format("YYYY-MM-DD")+' - '+(event.allDay == false ? event.end.format("YYYY-MM-DD") : formatDateMin( event.end.format("YYYY-MM-DD") )), '"'+event.title+'" berhasil diubah ke tanggal :');
                            }, 10);
                        }
                    )
                },
                viewRender: function (view, element) {
                    var date = $('#mycalendar').fullCalendar('getDate').format('DD-MM-YYYY');
                    $(".eventlist").remove();

                    $.ajax({
                        url: '<?php echo site_url('kalender/show_event_list') ?>',
                        type: 'POST',
                        dataType: 'json',
                        data: {date: date},
                        success: function (response) {
                            var www = response.Data;
                            listView = '<div class="portlet light portlet-fit bordered eventlist">'+
                                '<div class="portlet-title" style="margin-bottom: 0px;">'+
                                    '<div class="caption">'+
                                        '<span class="caption-subject bold">'+
                                            '<span class="label label-sm" style="font-size: 85%; font-weight: bolder; background-color: #d9534f;">Telat</span>'+
                                        '</span>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="portlet-body">'+
                                    '<table class="table table-hover table-light" style="margin-bottom: 0px;">'+
                                        '<tbody id="list1">'+
                                        '</tbody>'+
                                    '</table>'+
                                '</div>'+
                            '</div>';

                            listView2 = '<div class="portlet light portlet-fit bordered eventlist">'+
                                '<div class="portlet-title" style="margin-bottom: 0px;">'+
                                    '<div class="caption">'+
                                        '<span class="caption-subject bold">'+
                                            '<span class="label label-sm" style="font-size: 85%; font-weight: bolder; background-color: #337ab7;">Akan Datang</span>'+
                                        '</span>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="portlet-body">'+
                                    '<table class="table table-hover table-light" style="margin-bottom: 0px;">'+
                                        '<tbody id="list2">'+
                                        '</tbody>'+
                                    '</table>'+
                                '</div>'+
                            '</div>';

                            $(".fc-view-container").append(listView);
                            $(".fc-view-container").append(listView2);

                            for (var i = 0; i < www.length; i++) {
                                var list = '<tr>'+
                                    '<td style="color: #000" id="list_title'+www[i].id+'">'+www[i].title+'</td>'+
                                    '<td>'+
                                        '<div class="pull-right">'+
                                            '<button class="btn btn-primary" onclick="showDetail('+www[i].id+')"><i class="fa fa-edit"></i></button>'+
                                            '<button class="btn btn-danger" id="delete-'+www[i].id+'" onclick="deleteEvent(this, '+www[i].id+')"><i class="fa fa-trash"></i></button>'+
                                        '</div>'+
                                    '</td>'+
                                '</tr>';

                                var now = moment(new Date()).format('YYYY-MM-DD'), end = moment(www[i].end).format('YYYY-MM-DD');

                                if (now >= end) {
                                    $("#list1").append(list);
                                } else {
                                    $("#list2").append(list);
                                }
                            }

                            if ($("#list").children().hasClass('fa-list')) {
                                $(".eventlist").hide();
                            } else {
                                $(".fc-view").hide();
                                $(".eventlist").show();
                            }
                        },
                        complete: function () {
                            if ($("#list2 > tr").length == 0) {
                                $("#list2").parent().parent().append('<span style="display: block; text-align: center;">Data kosong.</span>').css('backgroundColor', '#f3f4f6');
                            }

                            if ($("#list1 > tr").length == 0) {
                                $("#list1").parent().parent().append('<span style="display: block; text-align: center;">Data kosong.</span>').css('backgroundColor', '#f3f4f6');
                            }
                        }
                    });
                }
            });

            var today = new Date(), month = today.getMonth() + 1, obj = [], listView, listView2;

            $("button.fc-prev-button, button.fc-next-button").attr('style', 'background-color: #fff; border: none; box-shadow: none; outline: none');
            $(".fc-left").prepend("<div class='fc-header-today'><div class='date-box' onclick='dateToday()'><div class='today-day'>"+today.getDate()+"</div><div class='today-month'>"+getMonth(month) +"</div><div class='today-year'>"+today.getFullYear()+"</div></div></div>");

            $(".eventlist").hide();
        });

        $("#search").keyup(function () {
            var input = $(this).val();

            if (input.length > 0) {
                $.ajax({
                    url: '<?php echo site_url('kalender/search'); ?>',
                    type: 'POST',
                    data: { search: input },
                    dataType: 'json'
                }).done(function (res) {
                    var data = res.Data;

                    $("#mycalendar").fullCalendar('removeEventSources');
                    $('#mycalendar').fullCalendar('addEventSource', data);
                });
            } else {
                $.ajax({
                    url: '<?php echo site_url('kalender/show_event'); ?>',
                    type: 'POST',
                    dataType: 'json'
                }).done(function (res) {
                    var data = res.Data;

                    $("#mycalendar").fullCalendar('removeEventSources');
                    $('#mycalendar').fullCalendar('addEventSource', data);
                });
            }
        });

        form_add.submit(function (event) {
            var param = {
                '_id': $("#id").val(),
                'title': $("#judul").val(),
                'user': $("#peserta").val().join(),
                'start': ($("#allday").is(':checked') ? $.trim( $("#tanggal").val().slice(0, 10) )+"T"+"00:00:00" : $.trim( $("#tanggal").val().slice(0, 10) )+ "T" + moment($("#start_time").val(), 'HH:mm a').format('HH:mm:ss') ),
                'end': ($("#allday").is(':checked') ? $.trim( formatDatePlus( $("#tanggal").val().slice(13, 23) ) )+"T"+"00:00:00" : $.trim( $("#tanggal").val().slice(13, 23) )+ "T" + moment($("#end_time").val(), 'HH:mm a').format('HH:mm:ss') ),
                'isallday': ($("#allday").is(':checked') ? '1' : '0'),
                'min_time': ($("#allday").is(':checked') ? '' : $("#start_time").val()),
                'max_time': ($("#allday").is(':checked') ? '' : $("#end_time").val()),
                'uraian': $("#uraian").val(),
                'reminder': ($("#pengingat").is(':checked') ? '1' : '0'),
                'num_rem': ($("#pengingat").is(':checked') ? '' : $("#num_rem").val()),
                'day_rem': ($("#pengingat").is(':checked') ? '' : $("#day_rem").val()),
                'progres': $("#progres").val(),
                'penginput': '<?php echo $this->session->userdata("user")->nama; ?>'
            };
            
            if ($("#peserta").val() == null) {
                console.log('Gagal');
            } else {
                $.ajax({
                    url: '<?php echo site_url('kalender/add_event') ?>',
                    type: 'POST',
                    data: {
                        judul: $("#judul").val(),
                        param: param
                    },
                    dataType: 'json',
                    success: function (data) {
                        if (data.success == true) {
                            $(".form-group").removeClass('has-error');
                            $(".help-block").remove();

                            setTimeout(function(response) {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'slideDown',
                                    positionClass: "toast-top-right",
                                    timeOut: 2000,
                                    onclick: null,
                                    showMethod: "fadeIn",
                                    hideMethod: "fadeOut",
                                };
                                toastr["success"]('Kegiatan "'+param.title+'" berhasil ditambahkan', 'Berhasil');
                            }, 10);

                            var addData = {
                                'id': param._id,
                                'title': param.title,
                                'allDay': ($("#allday").is(':checked') ? true : false),
                                'start': param.start,
                                'end':  param.end,
                                'color': param.progres
                            };

                            var list = '<tr>'+
                                '<td style="color: #000" id="list_title'+param.id+'">'+param.title+'</td>'+
                                '<td>'+
                                    '<div class="pull-right">'+
                                        '<button class="btn btn-primary" onclick="showDetail('+param.id+')"><i class="fa fa-edit"></i></button>'+
                                        '<button class="btn btn-danger" onclick="deleteEvent(this, '+param.id+')"><i class="fa fa-trash"></i></button>'+
                                    '</div>'+
                                '</td>'+
                            '</tr>';

                            var now = moment(new Date()).format('YYYY-MM-DD'), end = moment(param.end).format('YYYY-MM-DD');

                            if (now >= end) {
                                $("#list1").parent().parent().find("span").remove();
                                $("#list1").append(list).parent().parent().css('backgroundColor', '#fff');
                            } else {
                                $("#list2").parent().parent().find("span").remove();
                                $("#list2").append(list).parent().parent().css('backgroundColor', '#fff');
                            }

                            refresh_jumlah();

                            $("#mycalendar").fullCalendar('renderEvent', addData);
                            $("#addEvent").modal('hide');
                        } else {
                            if (data.messages instanceof Object) {
                                $(".form-group").removeClass('has-error');
                                $(".help-block").remove();

                                $.each(data.messages, function (index, value) {
                                    $("#"+index).after(value).closest('.form-group').addClass(value.length > 0 ? 'has-error' : '');

                                    $("#"+index).focusin(function () {
                                        $(".form-group").removeClass('has-error');
                                        $(".help-block").remove();
                                    });

                                    $("#"+index).focusout(function () {
                                        if ($(this).val().length > 0) {
                                            $(".form-group").removeClass('has-error');
                                            $(".help-block").remove();
                                        } else {
                                            $(".form-group").removeClass('has-error');
                                            $(".help-block").remove();

                                            $("#"+index).after(value).closest('.form-group').addClass('has-error');
                                        }
                                    });                                            
                                });
                            }
                        }
                    }
                });
            }
            
            event.preventDefault();
        });

        form_edit.submit(function (event) {
            $(".form-group").removeClass('has-error');
            $(".help-block").remove();

            var param = {
                '_id': $("#edit_id").val(),
                'title': $("#edit_judul").val(),
                'user': $("#edit_peserta").val().join(),
                'start': ($("#edit_allday").is(':checked') ? $.trim( $("#edit_tanggal").val().slice(0, 10) )+"T"+"00:00:00" : $.trim( $("#edit_tanggal").val().slice(0, 10) )+"T"+ moment($("#edit_start_time").val(), 'HH:mm a').format('HH:mm:ss') ),
                'end': ($("#edit_allday").is(':checked') ? $.trim( formatDatePlus($("#edit_tanggal").val().slice(13, 23)) )+"T"+"00:00:00" : $.trim( $("#edit_tanggal").val().slice(13, 23) )+"T"+ moment($("#edit_end_time").val(), 'HH:mm a').format('HH:mm:ss') ),
                'isallday': ($("#edit_allday").is(':checked') ? '1' : '0'),
                'min_time': ($("#edit_allday").is(':checked') ? '' : $("#edit_start_time").val()),
                'max_time': ($("#edit_allday").is(':checked') ? '' : $("#edit_end_time").val()),
                'uraian': $("#edit_uraian").val(),
                'reminder': ($("#edit_pengingat").is(':checked') ? '1' : '0'),
                'num_rem': ($("#edit_pengingat").is(':checked') ? '' : $("#edit_num_rem").val()),
                'day_rem': ($("#edit_pengingat").is(':checked') ? '' : $("#edit_day_rem").val()),
                'progres': $("#edit_progres").val(),
                'pengedit': '<?php echo $this->session->userdata("user")->nama; ?>'
            };

            $("#list_title"+param._id).html(param.title);

            $.ajax({
                url: '<?php echo site_url('kalender/update_event_form'); ?>'+'/'+$("#edit_id").val(),
                type: 'POST',
                data: {
                    edit_judul: param.title,
                    param: param
                },
                dataType: 'json'
            }).done(function (res) {
                if (res.success == true) {
                    setTimeout(function(response) {
                        toastr.options = {
                            closeButton: true,
                            progressBar: true,
                            showMethod: 'slideDown',
                            positionClass: "toast-top-right",
                            timeOut: 2000,
                            onclick: null,
                            showMethod: "fadeIn",
                            hideMethod: "fadeOut",
                        };
                        toastr["success"]('Kegiatan berhasil diupdate.', 'Berhasil');
                    }, 10);

                    eventData.id = $("#edit_id").val();
                    eventData.title = $("#edit_judul").val();
                    eventData.allDay = ($("#edit_allday").is(':checked') ? true : false);
                    eventData.start = ($("#edit_allday").is(':checked') ? $.trim( $("#edit_tanggal").val().slice(0, 10) )+"T"+"00:00:00" : $.trim( $("#edit_tanggal").val().slice(0, 10) )+"T"+moment($("#edit_start_time").val(), 'HH:mm a').format('HH:mm:ss') );
                    eventData.end = ($("#edit_allday").is(':checked') ? $.trim( formatDatePlus( $("#edit_tanggal").val().slice(13, 23) ) )+"T"+"00:00:00" : $.trim( $("#edit_tanggal").val().slice(13, 23) )+"T"+ moment($("#edit_end_time").val(), 'HH:mm a').format('HH:mm:ss') );
                    eventData.color = $("#edit_progres").val();

                    refresh_jumlah();

                    $("#mycalendar").fullCalendar('updateEvent', eventData);
                    $("#editEvent").modal('hide');
                } else {
                    if (res.messages instanceof Object) {
                        $.each(res.messages, function (index, value) {
                            $("#"+index).after(value).closest('.form-group').addClass(value.length > 0 ? 'has-error' : '');
                        });
                    }
                }
            });

            event.preventDefault();
        });
    });
</script>