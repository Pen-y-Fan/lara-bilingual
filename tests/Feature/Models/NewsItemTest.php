<?php

namespace Tests\Feature\Models;

use App\Models\NewsItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsItemTest extends TestCase
{
    use RefreshDatabase;

    public function testItCanCreateANewsItem(): void
    {
        $newsItem = NewsItem::create(['name' => 'Important news item']);

        $newsItem->refresh();
        $this->assertInstanceOf(NewsItem::class, $newsItem);
        $this->assertSame('Important news item', $newsItem->name);
    }

    public function testItCanCreateANewsItemInEnglishAndWelsh(): void
    {
        $newsItem = NewsItem::create([
            'name' => [
                'en' => 'Important news item',
                'cy' => 'Eitem newyddion bwysig'
            ],
        ]);
        $newsItem->refresh();

        $this->assertInstanceOf(NewsItem::class, $newsItem);
        // default locale 'en'
        $this->assertSame('Important news item', $newsItem->name);
        $this->assertSame('Important news item',$newsItem->getTranslations()['name']['en']);
        $this->assertSame('Eitem newyddion bwysig',$newsItem->getTranslations()['name']['cy']);
    }

    public function testItCanSetANewsItemTranslationInEnglishAndWelsh(): void
    {
        $translations = ['en' => 'Hello', 'cy' => 'Helo'];
        $newsItem = new NewsItem();
        $newsItem->name = $translations;
        $newsItem->save();

        $newsItem->refresh();

        $this->assertInstanceOf(NewsItem::class, $newsItem);
        // default locale 'en'
        $this->assertSame('Hello', $newsItem->name);
        $this->assertSame('Hello',$newsItem->getTranslations()['name']['en']);
        $this->assertSame('Helo',$newsItem->getTranslations()['name']['cy']);

        // alternatively, use the `setTranslations` method
        $newsItem->setTranslations('name', $translations);
        $newsItem->save();

        $newsItem->refresh();

        $this->assertSame('Hello', $newsItem->name);
        $this->assertSame('Hello',$newsItem->getTranslations()['name']['en']);
        $this->assertSame('Helo',$newsItem->getTranslations()['name']['cy']);
    }
}
