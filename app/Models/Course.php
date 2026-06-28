<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'tagline',
        'description',
        'fee',
        'fee_label',
        'duration_value',
        'duration_unit',
        'badge',
        'sort_order',
        'is_active',
        'is_featured',
    ];

    protected $casts = [
        'fee'         => 'decimal:2',
        'is_active'   => 'boolean',
        'is_featured' => 'boolean',
        'sort_order'  => 'integer',
    ];

    // ── Relationships ───────────────────────────────────────

    public function category(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class, 'category_id');
    }

    public function modules(): HasMany
    {
        return $this->hasMany(CourseModule::class)->orderBy('sort_order');
    }

    // ── Scopes ──────────────────────────────────────────────

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)->where('is_active', true);
    }

    // ── Accessors ───────────────────────────────────────────

    /**
     * Returns formatted fee string: "₹30,000" or "Subject Wise" or "₹8,000 / Module"
     */
    public function getFormattedFeeAttribute(): string
    {
        if ($this->fee == 0) {
            return $this->fee_label ?? 'Contact Us';
        }

        $formatted = '₹' . number_format($this->fee, 0);

        if ($this->fee_label) {
            $formatted .= ' / ' . $this->fee_label;
        }

        return $formatted;
    }

    /**
     * Returns duration string: "2 Months", "1 Year", etc.
     */
    public function getFormattedDurationAttribute(): string
    {
        if (! $this->duration_value) {
            return 'Flexible';
        }

        $unit = ucfirst($this->duration_unit);
        if ($this->duration_value === 1) {
            $unit = rtrim($unit, 's'); // "months" → "Month"
        }

        return $this->duration_value . ' ' . $unit;
    }
}
