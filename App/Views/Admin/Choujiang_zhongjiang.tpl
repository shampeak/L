<div class="row">
    <div class="col-md-12">
        <form class="zhongjiangtj form-horizontal" action="/?z=admin/choujiang/zhongjiang"  method="post">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">中奖理由</label>
                <div class="col-sm-10">
                    <input type="text" name="des" class="form-control">
                </div>
            </div>
            <input type="hidden" id="tag" name='uid' value="{$smarty.get.uid}">
        </form>

    </div>
</div>

<script type="text/dialog">
	$(document).ready(function(){
		$('.modal_ok').click(function(){
			var tag = '.zhongjiangtj';
			$.ajax({
				type: "POST",
				url: $(tag).attr("action"),
				data: $(tag).serialize(),
				dataType:'json',
				success: function(data){
					var JS = data.js;
					eval(JS);

					},
				error : function() {
					   alert("异常！");
				  }
			});
		});
	})
</script>