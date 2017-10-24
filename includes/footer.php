	<footer class="container-fluid">
		<p>Desenvolvido pela turma de Programação Web - Senac PB (João Pessoa) - 2017</p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- Editor summernote -->
	<script src="recursos/summernote/summernote.min.js"></script>
	<script src="recursos/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<!-- Calendário Bootstrap -->
	<script src="recursos/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js"></script>

	<!-- Máscaras -->
	<!-- <script src="recursos/mascaras/jquery.mask.js"></script> -->
	<script src="recursos/mascaras/jquery.mask.min.js"></script>

	<script>
		//editor de texto
		$(document).ready(function() {
			$('#summernote').summernote({
				height: 200
			});
		});
	</script>

	<script>
		//calendários
		$('#calendario').datepicker({
			format: 'dd/mm/yyyy',
			language: "pt-BR",
			startDate: '+0d'
		});
	</script>

	<script>
		//Máscaras
		$(document).ready(function() {
			// $('.codigo_mask').mask('00');
			// $('#data').mask('00/00/0000');
			// $('.time').mask('00:00:00');
			// $('.date_time').mask('00/00/0000 00:00:00');
			// $('.cep').mask('00000-000');
			// $('.phone').mask('0000-0000');
			// $('#tel').mask('(00) 0000-0000');
			// $('#tel1').mask('(00) 0000-0000');
			// $('#tel2').mask('(00) 0000-0000');
			// $('.phone_us').mask('(000) 000-0000');
			// $('#cnpj').mask('00.000.000/0000-00');
			// $('#cpf').mask('000.000.000-00', {
			// 	reverse : true
			// });
			// $('#valorReal').mask('000.000.000.000.000,00', {
			// 	reverse : true
			// });
			$('#valor').mask('000.000.000.000.000,00', {
				reverse : true
			});
			// $('#codigoProsoft').mask('00000');

			/*datas para consultas por intervalo*/
			// $('#dataInicial').mask('00/00/0000');
			// $('#dataFinal').mask('00/00/0000');
		});

	</script>

</body>
</html>
