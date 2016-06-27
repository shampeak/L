<?php
/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/6/19
 * Time: 18:44
 */

namespace App\Model;


class PageModel
{



    public function get($pageinfo = array())
    {
        $this->page         = $pageinfo['page']?:1 ;        //当前页
        $this->pagecount    = $pageinfo['pagecount'] ;
        $this->pagesize     = $pageinfo['pagesize'] ;

        $this->maxpage = ceil($this->pagecount/$this->pagesize);
        //计算limit
        $this->page =($this->page> $this->maxpage)?$this->maxpage:$this->page;

        $this->prepage = $this->page - 1;
        $this->nextpage = $this->page + 1;

        $this->prepage = ($this->prepage<1)?1:$this->prepage;
        $this->nextpage = ($this->nextpage > $this->maxpage)?$this->maxpage:$this->nextpage;

        $this->limit = (($this->page -1)*$this->pagesize) . ',' . $this->pagesize  ;
        return [
            'page'      => $this->page,
            'pagecount' => $this->pagecount,
            'pagesize'  => $this->pagesize,
            'maxpage'   => $this->maxpage,
            'prepage'   => $this->prepage,
            'nextpage'  => $this->nextpage,
            'limit'     => $this->limit
        ];
    }



}
