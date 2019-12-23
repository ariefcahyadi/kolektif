<?php
function loadCss(Array $css)
{
    foreach ($css as $key => $value) {
        $arr[] = '<link rel="stylesheet" href="'.base_url('assets/').$value.'"> ';
    }
    echo implode('', $arr);
}
function loadJs(Array $js)
{
    foreach ($js as $key => $value) {
        $arr[] = '<script src="'.base_url('assets/').$value.'"></script>';
    }
    echo implode('', $arr);
}
function dd($data)
{
    echo "<pre style='color: red; margin: 30px; background-color: #dbdbdb; padding: 20px'>";
    print_r($data);
    echo "</pre>";
    exit;
}
function d($data)
{
    echo "<pre style='color: red; margin: 30px; background-color: #dbdbdb; padding: 20px'>";
    print_r($data);
    echo "</pre>";
}
function textField($model, $options = []){
    return form_input($options);
}

function actionColoumn(Array $template, $uri, $id)
{
    if ($uri==null) {
        return null;
    }
    foreach ($template as $key => $value) {
        switch ($value) {
            case 'edit':
                $icon = 'ti-pencil-alt';
                $color = 'ab-yellow';
                $btns[] = "<a class='action-btn ".$color."' href='".base_url().$uri."/edit/$id'><span class='".$icon."'></span></a>";
                break;
            case 'delete':
                $btns[] = deleteButton($id, $uri.'/delete');
                break;
            
            default:
                # code...
                break;
        }
        
        
    }
    return '<td>'.implode(' ', $btns).'</td>';
}

function deleteButton($id, $uri)
{
    
    $form[] = '<input type="hidden" name="delete_id" value="'.$id.'">';
    return form_open($uri, 'class="d-inline"').implode('', $form).
    '<button type="submit" class="action-btn ab-pink"><span class="fa fa-trash"></span></button> </form>';
}

function serializeTable($model, Array $config = [])
{
    $label = "Label";
    $action = isset($config['action']) ? $config['action'] : ['edit', 'delete'];
    $columns = $config['columns'];
    $actionLabel = $action ? '<th style="width: 100px"></th>' : '';

    foreach ($columns as $key => $value) {
        $label = ucwords(str_replace('_', ' ', $value));
        $ths[] = '<th>'.$label.'</th>';
    }
    foreach ($model as $key => $value) {
        $index = $key+1;
        $action_btn = $action ? actionColoumn($action, isset($config['uri']) ? $config['uri'] : null, $value->id) : '';
        foreach ($columns as $key2 => $value2) {
            $rows[$key2] = '<td>'.$value->$value2.'</td>';
        }
        $row = implode("\n", $rows);
        $trs[] = "<tr><td>".$index."</td>".$row.$action_btn."</tr>";
    }
    $th = implode("\n", $ths);
    $tr = isset($trs) ? implode("\n", $trs) : '';
    echo '
    <table class="table table-hover">
        <thead>
            <tr>
                <th style="width: 70px">No</th>
                '.$th.$actionLabel.'
                
            </tr>
        </thead>
        <tbody>
        '.$tr.'
        </tbody>
    </table>
    ';
}

?>