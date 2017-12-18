# wison-framwork

## route
https://github.com/wisonlau/route

## validation
https://github.com/wisonlau/validation

## Model

```php
// 选出id为1的一篇文章
$article = Article::findOne(['id' => 1]);

// 选出status是unpublished的所有文章
$articles = Article::findAll(['status' => 'unpublished']);

// 将id为1的所有文章的status更新为published
Article::updateAll(['id' => 2], ['status' => 'published']);

// 删除所有id为1的文章
Article::deleteAll(['id' => 2]);

// $article是之前选出的id为1的文章
// 更新它的属性status为unpublished
$article->status = 'unpublished';
// 保存更新到数据库
$article->update();

// 删除该文章
$article->delete();

// 创建一个新文章
$article = new Article();
$article->name = 'My first article';
$article->status = 'published';
// 将该文章保存到数据库中
$article->insert();
```

## cache

```php
$cache = wison::createObject('cache');
$cache->set('test', '我就是测试一下缓存组件');
$result = $cache->get('test');
$cache->flush();
echo $result;
```

## 模板

#### 输出变量值

{{ }} 表达式的返回值将被自动传递给 PHP 的 htmlentities 函数进行处理，以防止 XSS 攻击。
```
Hello, {{ $name }}!
```

#### 输出未转义的变量值
```
Hello, {!! $name !!}!
```

#### If 表达式
通过 @if、@elseif、@else 和 @endif 指令可以创建 if 表达式。
```
@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif
```

#### 循环

```
@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor

@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach

@while (true)
    <p>I'm looping forever.</p>
@endwhile
```