<?php


namespace Tests\Api;

use Tests\Support\ApiTester;

class CreatePostCest
{
    public function _before(ApiTester $I)
    {
        $I->haveHttpHeader('Content-Type', 'application/json');
    }

    /**
     * This api is create a new post with value ['title' => 'apititle', 'views' => 333]
     * @param \Tests\Support\ApiTester $I
     * @return void
     */
    public function createPostApi(ApiTester $I)
    {
        $I->sendPost('/posts', json_encode(['title' => 'apititle', 'views' => 333]));
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['title' => 'apititle', 'views' => 333]);
        $I->comment('Response: ' . $I->grabResponse());
        $I->seeResponseCodeIs(201);
    }

    /**
     * This api is for reading the posts for read operation
     * @param \Tests\Support\ApiTester $I
     * @return void
     */
    public function getRequestApi(ApiTester $I)
    {
        $I->sendGet('/posts', ['status' => 'panding']);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->grabResponse();
    }

    /**
     * This api is for update the posts Completly update a single post that id is 1
     * @param \Tests\Support\ApiTester $I
     * @return void
     */
    public function updateRequestApi(ApiTester $I)
    {
        $I->sendPut('/posts/1', ['title' => 'updated title', 'views' => 1000]);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->grabResponse();
    }


    /**
     * This api is for Partially update the posts id is 1
     * @param \Tests\Support\ApiTester $I
     * @return void
     */
    public function partialUpdatePostApi(ApiTester $I)
    {
        $I->sendPut('/posts/1', json_encode(['views' => 32]));
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->grabResponse();
    }

    public function deletePostApi(ApiTester $I) {
        $I->sendDelete('/posts/1');
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->grabResponse();
    }
    
}
