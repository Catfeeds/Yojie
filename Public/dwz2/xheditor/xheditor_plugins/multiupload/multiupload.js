function removeFile(){var e;if(selectID){for(var t in selQueue)if(e=selQueue[t],e.id==selectID){selQueue.splice(t,1),allSize-=e.size,swfu.cancelUpload(e.id),$("#"+e.id).remove(),selectID=null;break}$("#btnClear").hide(),0==selQueue.length&&$("#controlBtns").hide()}}function startUploadFiles(){swfu.getStats().files_queued>0?($("#controlBtns").hide(),swfu.startUpload()):alert("上传前请先添加文件")}function setFileState(e,t){$("#"+e+"_state").text(t)}function fileQueued(e){for(var t in selQueue)if(selQueue[t].name==e.name)return swfu.cancelUpload(e.id),!1;0==selQueue.length&&$("#controlBtns").show(),selQueue.push(e),allSize+=e.size,$("#listBody").append('<tr id="'+e.id+'"><td>'+e.name+"</td><td>"+formatBytes(e.size)+'</td><td id="'+e.id+'_state">就绪</td></tr>'),$("#"+e.id).hover(function(){$(this).addClass("hover")},function(){$(this).removeClass("hover")}).click(function(){selectID=e.id,$("#listBody tr").removeClass("select"),$(this).removeClass("hover").addClass("select"),$("#btnClear").show()})}function fileQueueError(e,t,a){var l="";switch(t){case SWFUpload.QUEUE_ERROR.QUEUE_LIMIT_EXCEEDED:l="只能同时上传 "+this.settings.file_upload_limit+" 个文件";break;case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:l="选择的文件超过了当前大小限制："+this.settings.file_size_limit;break;case SWFUpload.QUEUE_ERROR.ZERO_BYTE_FILE:l="零大小文件";break;case SWFUpload.QUEUE_ERROR.INVALID_FILETYPE:l="文件扩展名必需为："+this.settings.file_types_description+" ("+this.settings.file_types+")";break;default:l="未知错误"}alert(l)}function uploadStart(e){setFileState(e.id,"上传中…")}function uploadProgress(e,t,a){var l=Math.ceil((uploadSize+t)/allSize*100);$("#progressBar span").text(l+"% ("+formatBytes(uploadSize+t)+" / "+formatBytes(allSize)+")"),$("#progressBar div").css("width",l+"%")}function uploadSuccess(file,serverData){var data=Object;try{eval("data="+serverData)}catch(ex){}void 0!=data.err&&void 0!=data.msg?data.err?(setFileState(file.id,"上传失败"),alert(data.err)):(uploadSize+=file.size,arrMsg.push(data.msg),setFileState(file.id,"上传成功")):setFileState(file.id,"上传失败！")}function uploadError(e,t,a){setFileState(e.id,"上传失败！")}function uploadComplete(e){swfu.getStats().files_queued>0?swfu.startUpload():uploadAllComplete()}function uploadAllComplete(){callback(arrMsg)}function formatBytes(e){var t=["Byte","KB","MB","GB","TB","PB"],a=Math.floor(Math.log(e)/Math.log(1024));return(e/Math.pow(1024,Math.floor(a))).toFixed(2)+" "+t[a]}var swfu,selQueue=[],selectID,arrMsg=[],allSize=0,uploadSize=0;