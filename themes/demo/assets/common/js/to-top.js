$(function(){
	//�{�^��[id:page-top]���o��������X�N���[���C�x���g
	$(window).scroll(function(){
		//�ŏ㕔���猻�݈ʒu�܂ł̋������擾���āA�ϐ�[now]�Ɋi�[
		var now = $(window).scrollTop();

		//�ŉ������猻�݈ʒu�܂ł̋������v�Z���āA�ϐ�[under]�Ɋi�[
		var under = $('body').height() - (now + $(window).height());
 
		//�ŏ㕔���猻�݈ʒu�܂ł̋���(now)��100�ȏゾ������
		if(now > 100){
			//[#page-top]���������t�F�[�h�C������
			$('#page-top').fadeIn('slow');
		//����ȊO��������t�F�[�h�A�E�g����
		}else{
			$('#page-top').fadeOut('slow');
		}
	});
 
	//�{�^��(id:move-page-top)�̃N���b�N�C�x���g
	$('#move-page-top').click(function(){
		//�y�[�W�g�b�v�ֈړ�����
		$('html,body').animate({scrollTop:0},'slow');
	});
});