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
                        <a href="<?php echo site_url('kalender'); ?>" >Kalender</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Reminder</span>
                    </li>
                </ul>
            </div>
        </div>  
        <div class="col-md-6 col-sm-12 col-xs-12 text-right">
            <div class="title-action form-inline">
                <div class="form-group text-center form-action">                                         
                    <a class="btn btn-primary" onclick="location.reload();" title="Refresh Data (Reload Halaman)">
                        <i class="fa fa-refresh"></i>
                    </a>         
                </div>
            </div>
        </div> 
    </div>
    <!-- END PAGE TITLE -->
</div>
<!-- END PAGE HEAD-->

<div class="portlet light portlet-fit bordered">
    <div class="portlet-title" style="margin-bottom: 0px;">
        <div class="caption">
            <i class="fa fa-calendar"></i>&nbsp;
            <span class="caption-subject font-dark bold uppercase" id="title"></span>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-hover table-light" style="margin-bottom: 0px;">
            <tbody>
                <tr>
                    <td style="color: #000; font-weight: 500; width: 25%;">Tanggal</td>
                    <td id="tanggal" class="td"></td>
                </tr>
                <tr>
                    <td style="color: #000; font-weight: 500; width: 25%;">Peserta</td>
                    <td id="peserta" class="td"></td>
                </tr>
                <tr>
                    <td style="color: #000; font-weight: 500; width: 25%;">Judul</td>
                    <td id="judul" class="td"></td>
                </tr>
                <tr>
                    <td style="color: #000; font-weight: 500; width: 25%;">Uraian</td>
                    <td id="uraian" class="td"></td>
                </tr>
                <tr>
                    <td style="color: #000; font-weight: 500; width: 25%;">Progres</td>
                    <td id="progres" class="td"></td>
                </tr>
                <tr>
                    <td style="color: #000; font-weight: 500; width: 25%;">Informasi</td>
                    <td id="td" class="td informasi"></td>
                </tr>
                <tr>
                    <td style="color: #000; font-weight: 500; width: 25%;">Diinput</td>
                    <td id="diinput" class="td"></td>
                </tr>
                <tr>
                    <td style="color: #000; font-weight: 500; width: 25%;">Diupdate</td>
                    <td id="diupdate" class="td"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- END BORDERED TABLE PORTLET-->

<div class="portlet light portlet-fit bordered">
    <div class="portlet-title" style="margin-bottom: 0px;">
        <div class="caption">
            <i class="fa fa-list"></i>&nbsp;
            <span class="caption-subject font-dark bold uppercase">Data</span>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-hover table-light" style="margin-bottom: 0px;">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Peserta</th>
                    <th>Judul</th>
                    <th>Progres</th>
                    <th>Informasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data->Data as $result) :
                switch ($result->progres) {
                    case '#337ab7':
                        $progres = "Baru";
                        break;
                    case '#f0ad4e':
                        $progres = "Dikerjakan";
                        break;
                    case '#5cb85c':
                        $progres = "Selesai";
                        break;
                }
            ?>
                <tr style="cursor: pointer;" id="tr-<?php echo $result->_id; ?>" onclick="showDetail(<?php echo $result->_id; ?>)">
                    <td><?php echo ($result->start == $result->end) ? $result->start : $result->start." - ".$result->end; ?></td>
                    <td><?php echo implode(', ', $result->user); ?></td>
                    <td><?php echo $result->title; ?></td>
                    <td><span class="label label-sm label-<?php echo $result->_id; ?>" style="background-color: <?php echo $result->progres; ?>"><?php echo $progres; ?></span></td>
                    <td><?php echo ( date('Y-m-d') > date('Y-m-d', strtotime($result->end)) ) ? "<span class='label label-sm' style='background-color: #d9534f;'>Telat</span>" : " "; ?></td>
                    <td>
                    <?php if ($progres != 'Selesai') : ?>
                        <button class="btn btn-primary" onclick="eventDone(this, <?php echo $result->_id; ?>)"><i class="fa fa-check"></i></button>
                    <?php else : ?>

                    <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    function showDetail(id) {
        $.ajax({
            url: '<?php echo site_url('reminder/show') ?>'+'/'+id,
            type: 'POST',
            dataType: 'json'
        }).done(function (res) {
            var data = res.Data[0], progres;

            $("#title").empty();
            $(".td").empty();

            switch (data.progres) {
                case '#337ab7':
                    progres = "Baru";
                    break;
                case '#f0ad4e':
                    progres = "Dikerjakan";
                    break;
                case '#5cb85c':
                    progres = "Selesai";
                    break;
            }

            $("#title").append("Detail "+data.title);
            $("#tanggal").append((data.start == data.end ? data.start : data.start+" - "+data.end));
            $("#peserta").append(data.user.join(', '));
            $("#judul").append(data.title);
            $("#uraian").append(data.uraian);
            $("#progres").append('<span class="label label-sm label-'+data._id+'" style="background-color: '+data.progres+';">'+progres+'</span>');
            $("#diinput").append('<a href="#">'+data.penginput+"</a> - "+data.created_at);
            if (data.pengedit == null) {
                $("#diupdate").closest('tr').hide();
            } else {
                $("#diupdate").closest('tr').show();
                $("#diupdate").append('<a href="#">'+data.pengedit+'</a> - '+data.updated_at);
            }

            var now = moment(new Date()).format('YYYY-MM-DD'), end = moment(data.end).format('YYYY-MM-DD');

            if (now > end) {
                $("#td.informasi").html('<span class="label label-sm" style="background-color: #d9534f;">Telat</span>');
            }
        });
    }

    function eventDone(element, id) {
        swal({
            title: "Ubah kegiatan ke selesai?",
            text: "Progres akan diubah ke selesai.",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#337ab7",
            confirmButtonText: "Ubah",
            cancelButtonText: "Batal",
            closeOnConfirm: true,
            closeOnCancel: true
        },
        function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: '<?php echo site_url('reminder/edit') ?>'+'/'+id,
                    type: 'POST',
                    data: { progres: '#5cb85c' }
                }).done(function (res) {
                    refresh_jumlah();

                    element.remove();
                    $(".label-"+id).empty();
                    $(".label-"+id).css("backgroundColor", "#5cb85c").append("Selesai");
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
                        toastr["success"]('Kegiatan diubah ke selesai.', 'Berhasil!');
                    }, 10);
                });
            }
        });
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

    $(document).ready(function () {
        get_admin();

        refresh_jumlah();

        $.ajax({
            url: '<?php echo site_url('reminder/fetch_last_id') ?>',
            type: 'POST',
            dataType: 'json'
        }).done(function (res) {
            var data = res.Data[0], progres;

            $("#title").empty();
            $(".td").empty();

            switch (data.progres) {
                case '#337ab7':
                    progres = "Baru";
                    break;
                case '#f0ad4e':
                    progres = "Dikerjakan";
                    break;
                case '#5cb85c':
                    progres = "Selesai";
                    break;
            }

            $("#title").append("Detail "+data.title);
            $("#tanggal").append((data.start == data.end ? data.start : data.start+" - "+data.end));
            $("#peserta").append(data.user.join(', '));
            $("#judul").append(data.title);
            $("#uraian").append(data.uraian);
            $("#progres").append('<span class="label label-sm label-'+data._id+'" style="background-color: '+data.progres+';">'+progres+'</span>');
            $("#diinput").append('<a href="#">'+data.penginput+"</a> - "+data.created_at);
            if (data.pengedit == null) {
                $("#diupdate").closest('tr').hide();
            } else {
                $("#diupdate").closest('tr').show();
                $("#diupdate").append('<a href="#">'+data.pengedit+'</a> - '+data.updated_at);
            }

            var now = moment(new Date()).format('YYYY-MM-DD'), end = moment(data.end).format('YYYY-MM-DD');
            if (now > end) {
                $("#td.informasi").html('<span class="label label-sm" style="background-color: #d9534f;">Telat</span>');
            }
       })
    });
</script>