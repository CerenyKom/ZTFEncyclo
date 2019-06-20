
@extends('layouts.app')

@section('content')
    <link href="css/pay.css" rel="stylesheet" type="text/css">
   <div id="w3l-payment-pg" class="w3l-payment-pg ">
		<div class="container">
            <h4 class="w3ls-inner-title">Gestion des Etudiants</h4>
            <div class="content-wthree">
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
					  <li class="w3-pay-active">Enregistrer un nouvelle etudiant</li>
					</ul>
					<div class="resp-tabs-container">
                        <div class="tab1 active">
                            <form action="{{route("student.store")}}" method="post" class="agile_form">
                                {{csrf_field()}}
                                <div class="w3ls-text sec-left">
                                    <label class="contact-form-w3ls">Entrer son mom</label>
                                    <input placeholder="Entrer son mom" name="noms" type="text" required="">
                                </div>
                                <div class="w3ls-text sec-right">
                                    <label class="contact-form-w3ls">Entrer son age spirituel</label>
                                    <input placeholder="Entrer son age spirituel" name="agesp" type="text" required="">
                                </div>
                                <div class="clearfix"></div>
                                <div class="w3ls-text sec-left">
                                    <label class="contact-form-w3ls">Entrer son age</label>
                                    <input placeholder="Entrer son age" name="age" type="text" required="">
                                </div>
                                <div class="w3ls-text sec-right">
                                    <label class="contact-form-w3ls">Province Spirituel</label>
                                    <input placeholder="Province Spirituel" name="province" type="text" required="">
                                </div>
                                <div class="clearfix"></div>
                                <div class="w3ls-text sec-left">
                                    <label class="contact-form-w3ls">Ville</label>
                                    <input placeholder="Ville" name="ville" type="text" required="">
                                </div>
                                <div class="w3ls-text sec-right">
                                    <label class="contact-form-w3ls">Matricule</label>
                                    <input placeholder="Matricule" name="matricule" type="text" required="">
                                </div>
                                <div class="clearfix"></div>
                                <div class="w3ls-pay-submit">
                                    <input type="submit" value="Enregistrer">
                                </div>
                            </form>
                        </div>
					</div>
		</div>
	</div>
            <div class="well"></div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <table id="Student-table" class="table table-striped table-responsive">
                        <thead>
                        <th>Matricule</th>
                        <th>Noms</th>
                        <th>Ville</th>
                        <th>Age_Spirituel</th>
                        <th>Province_Spirituel</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
   </div>
</div>
    <script>

        var MonTableau = $('#Student-table').DataTable({
            processing : true,
            serverSide : true,
            ajax: "{{route('student.api')}}",
            columns: [
                {data :'Matricule'},
                {data :'Noms' },
                {data :'Ville' },
                {data :'Age_Spirituel' },
                {data :'Province_Spirituel' },
                {data :'action', name: 'action' , orderable: false, searchable: false}
            ]
        });

        var action;

        function create() {
            $('#demo').modal('show');
            action = 1;
            $('input[name=_method]').val('POST');
            $('.modal-title').text('Ajouter un nounelle article');
            $('#titre').val('');
            $('#contenue').val('');
        }

        function destroy(id) {
            var csrf_token = "{{ csrf_token() }}";
            swal({
                title: 'Voulez vous vraiment supprimer cette etudiant?',
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#3885d6',
                cancelButtonText: 'Annuller',
                confirmButtonColor: '#d33',
                confirmButtonText : 'Supprimer'
            }).then(function () {
                $.ajax({
                    url: "{{url('student')}}"  + '/' + id,
                    type: "POST",
                    data: {'_method' : 'DELETE', '_token': csrf_token}
                }).done(function () {
                    MonTableau.ajax.reload();
                    swal({
                        title: 'Suppression reussi',
                        text: "L'etudiant a bien ete supprimer",
                        type: 'success',
                        timer: '1500'
                    });
                    $('#modale-supprimer').modal('hide');
                })
                    .fail(function () {
                        swal({
                            title: 'Oops',
                            text: "une erreur s'est produit",
                            type: 'error',
                            timer: '1500'
                        });
                    })
            })

        }

        function edit(id) {
            action = 2;
            $('input[name=_method]').val('PUT');
            var  url = "{{url('student')}}" + '/' + id + "/edit";
            $.ajax(url)
                .done(function(data)
                {
                    $('#demo').modal('show');
                    $('.modal-title').text('Modifier');
                    $('#titre').val(data.titre_post);
                    $('#contenue').val(data.contenue_post);
                    $('#id').val(data.id);
                })
                .fail(function()
                {
                    swal({
                        title: 'Oops',
                        text: "une erreur s'est produit",
                        type: 'error',
                        timer: '1500'
                    });
                })
        }


        $('#SubmitPost').on('submit', function (e) {
            var urldynamique;
            var id;
            e.preventDefault();
            if(action === 1 )
                urldynamique = "{{route('student.store')}}";
            else
            if (action === 2){
                id = $('#id').val();
                urldynamique = "{{url('student')}}" + '/' + id ;
            }
            var form = $(this);
            $.post(urldynamique, form.serializeArray())
                .done(function(data)
                {
                    MonTableau.ajax.reload();
                    $('#demo').modal('hide');
                    swal({
                        title: 'Enregistrement reussi !',
                        text: 'Votre etudiant a bien ete enregistrer',
                        type: 'success',
                        timer: '1500'
                    });
                })
                .fail(function()
                {
                    swal({
                        title: 'Oops',
                        text: "une erreur s'est produit",
                        type: 'error',
                        timer: '1500'
                    });
                })
        });

    </script>

@endsection