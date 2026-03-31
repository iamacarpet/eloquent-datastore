<?php

namespace Rennokki\QueryCache\Contracts {
    if (!interface_exists(QueryCacheModuleInterface::class)) {
        interface QueryCacheModuleInterface {}
    }
}

namespace Rennokki\QueryCache\Traits {
    if (!trait_exists(QueryCacheable::class)) {
        trait QueryCacheable {
            public static function getFlushQueryCacheObserver() { return null; }
            protected function getCacheTagsToInvalidateOnUpdate() { return []; }
            protected function newBaseQueryBuilder() { return null; }
        }
    }
    if (!trait_exists(QueryCacheModule::class)) {
        trait QueryCacheModule {
            public function generatePlainCacheKey() { return ''; }
            public function getFromQueryCache() { return null; }
            public function getQueryCacheCallback() { return null; }
            public function dontCache() { return $this; }
            public function cacheFor($time) { return $this; }
            public function cacheTags($tags) { return $this; }
            public function cachePrefix($prefix) { return $this; }
            public function cacheDriver($driver) { return $this; }
            public function withPlainKey() { return $this; }
            public function cacheBaseTags($tags) { return $this; }
            public function recacheFindQuery() { return $this; }
            public function flushQueryCacheWithTag($tag) { return $this; }
        }
    }
}

namespace Rennokki\QueryCache {
    if (!class_exists(FlushQueryCacheObserver::class)) {
        class FlushQueryCacheObserver {}
    }
}
