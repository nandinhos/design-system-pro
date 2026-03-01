<?php

namespace Tests\Feature\Infrastructure;

use App\Infrastructure\Component\IdentifierGenerator;
use Tests\TestCase;

class IdentifierGeneratorTest extends TestCase
{
    private IdentifierGenerator $generator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->generator = new IdentifierGenerator();
    }

    public function test_generates_basic_identifier(): void
    {
        $id = $this->generator->generate('form', 'button', 'primary', '1.0.0');

        $this->assertSame('ui.form.button.primary.v1_0_0', $id);
    }

    public function test_is_deterministic(): void
    {
        $id1 = $this->generator->generate('form', 'button', 'primary', '1.0.0');
        $id2 = $this->generator->generate('form', 'button', 'primary', '1.0.0');

        $this->assertSame($id1, $id2);
    }

    public function test_slugifies_spaces_in_category(): void
    {
        $id = $this->generator->generate('data display', 'avatar', 'default', '1.0.0');

        $this->assertSame('ui.data-display.avatar.default.v1_0_0', $id);
    }

    public function test_slugifies_spaces_in_component(): void
    {
        $id = $this->generator->generate('layout', 'split panel', 'default', '1.0.0');

        $this->assertSame('ui.layout.split-panel.default.v1_0_0', $id);
    }

    public function test_slugifies_spaces_in_variant(): void
    {
        $id = $this->generator->generate('feedback', 'modal', 'full screen', '2.0.0');

        $this->assertSame('ui.feedback.modal.full-screen.v2_0_0', $id);
    }

    public function test_converts_version_dots_to_underscores(): void
    {
        $id = $this->generator->generate('form', 'input', 'text', '2.5.3');

        $this->assertSame('ui.form.input.text.v2_5_3', $id);
    }

    public function test_lowercases_all_segments(): void
    {
        $id = $this->generator->generate('Form', 'Button', 'Primary', '1.0.0');

        $this->assertSame('ui.form.button.primary.v1_0_0', $id);
    }

    public function test_removes_special_characters(): void
    {
        $id = $this->generator->generate('form', 'button!', 'primary@2', '1.0.0');

        $this->assertSame('ui.form.button.primary2.v1_0_0', $id);
    }

    public function test_different_inputs_produce_different_identifiers(): void
    {
        $id1 = $this->generator->generate('form', 'button', 'primary', '1.0.0');
        $id2 = $this->generator->generate('form', 'button', 'secondary', '1.0.0');

        $this->assertNotSame($id1, $id2);
    }

    public function test_format_is_always_ui_dot_prefixed(): void
    {
        $id = $this->generator->generate('navigation', 'navbar', 'default', '1.0.0');

        $this->assertStringStartsWith('ui.', $id);
    }
}
