<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

class FavoriteController extends Controller
{ public function store($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをフォローする
        \Auth::user()->favorite($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * ユーザをアンフォローするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンフォローする
        \Auth::user()->unFavorite($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }
}