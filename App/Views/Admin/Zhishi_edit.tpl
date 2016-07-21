<div class="row">
    <div class="col-md-12">
        <form class="zhishiedit form-horizontal" action="?z=admin/zhishi/edit/"  method="post">


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">嘉宾姓名</label>
                <div class="col-sm-10">
                    <input type="text" name="jiab" class="form-control" value="{$row['jiab']}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">演讲题目</label>
                <div class="col-sm-10">
                    <input type="text" name="jiatitle" class="form-control" value="{$row['jiatitle']}">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" value="{$row['title']}">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">选项A</label>
                <div class="col-sm-10">
                    <input type="text" name="optionA" class="form-control" value="{$row['optionA']}">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">选项B</label>
                <div class="col-sm-10">
                    <input type="text" name="optionB" class="form-control" value="{$row['optionB']}">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">选项C</label>
                <div class="col-sm-10">
                    <input type="text" name="optionC" class="form-control" value="{$row['optionC']}">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">选项D</label>
                <div class="col-sm-10">
                    <input type="text" name="optionD" class="form-control" value="{$row['optionD']}">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">答案</label>
                <div class="col-sm-10">
                    <input type="text" name="da" class="form-control" value="{$row['da']}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">排序</label>
                <div class="col-sm-10">
                    <input type="text" name="sort" class="form-control" value="{$row['sort']}">
                </div>
            </div>
            
            <input type="hidden" id="tag" name='id' value="{$row['id']}">
            <input type="hidden" id="tag" name='act' value="update">
        </form>

    </div>
</div>

<script type="text/dialog">
	$(document).ready(function(){
		$('.modal_ok').click(function(){
			var tag = '.zhishiedit';
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