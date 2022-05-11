var spinning = false;

function spin()
{
    spinning = !spinning;
    document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('model1__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('model2__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
    spinning = false;
    document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('model1__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('model2__RotationTimer').setAttribute('enabled', spinning.toString());

}

function animateModel()
{
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!='true')
        document.getElementById('model__RotationTimer').setAttribute('enabled','true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled','false');
}

function wireframe()
{
	var e = document.getElementById('model');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__NavInfo001').setAttribute('headlight', lightOn.toString());
	document.getElementById('model1__NavInfo001').setAttribute('headlight', lightOn.toString());
	document.getElementById('model2__NavInfo001').setAttribute('headlight', lightOn.toString());
}

function cameraFront()
{
	document.getElementById('model__Default').setAttribute('bind', 'true');
	document.getElementById('model1__Default').setAttribute('bind', 'true');
	document.getElementById('model2__Default').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__Top').setAttribute('bind', 'true');
	document.getElementById('model1__Top').setAttribute('bind', 'true');
	document.getElementById('model2__Top').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__Right').setAttribute('bind', 'true');
	document.getElementById('model1__Right').setAttribute('bind', 'true');
	document.getElementById('model2__Right').setAttribute('bind', 'true');
	
}

